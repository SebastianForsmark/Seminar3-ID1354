<?php

namespace TastyRecipes\Integration;


class DatabaseConnector {

    private $database;
    private $dbServer;
    private $dbUsername;
    private $dbPassword;
    private $dbName;

    public function __construct() {
        $this->dbServer = 'localhost';
        include('C:\databaselogin.php');
        $this->dbName = 'tastyRecipesDB';
    }

    public function connectToDatabase() {
        $this->database = new \mysqli($this->dbServer, $this->dbUsername, $this->dbPassword, $this->dbName);
        if ($this->database->connect_error) {
          throw new \Exception("We're sorry, but we're unable to access our database right now. "
          .  "Please write a strongly worded email to the website admin.");
        }
    }

    public function loginQuery($username) {
        $this->connectToDatabase();
        $stmt = $this->database->prepare("SELECT userEmail, userPass FROM registeredusers WHERE userName = ?");
        $stmt->bind_param(s, $username);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($userEmail, $hashedPass);
        $stmt->fetch();
        $result = array("userEmail"=>$userEmail, "hashedPass"=>$hashedPass);
        mysqli_close($this->database);
        return $result;
    }

    public function addUserToDatabase($regUsername, $regEmail, $regPassword) {
        $this->connectToDatabase();
        $stmt = $this->database->prepare("INSERT INTO registeredusers (userName, userEmail, userPass) VALUES (?, ?, ?)");
        $stmt->bind_param(sss, $regUsername, $regEmail, $regPassword);
        $stmt->execute();
        mysqli_close($this->database);
        $stmt->close();
        if($stmt){
          return true;}
    }

    public function commentIntoDatabase($tableName, $username, $date, $comment) {
        $this->connectToDatabase();
        $this->sanitizeTableName($tableName);
        $stmt = $this->database->prepare("INSERT INTO $tableName (username, date, comment) VALUES (?, ?, ?)");
        $stmt->bind_param(sss, $username, $date, $comment);
        $stmt->execute();
        mysqli_close($this->database);
        $stmt->close();
    }

    public function commentsFromDatabase($pageName) {
        $this->connectToDatabase();
        $this->sanitizeTableName($pageName);
        $sql = "SELECT * FROM $pageName";
        $result = mysqli_query($this->database, $sql);
        mysqli_close($this->database);
        return $result;
    }

    public function deleteCommentFromDatabase($tableName, $id, $currentUser) {
        $this->sanitizeTableName($tableName);
        $this->connectToDatabase();
        $stmt = $this->database->prepare("SELECT comment FROM $tableName WHERE userName = ? AND id = ?");
        $stmt->bind_param(si, $currentUser, $id);
        $stmt->execute();
        $stmt->store_result();
        $currentUserOwnsComment = $stmt->num_rows;
        $stmt->close();
        // If it's 1 row then the delete request is for the currently logged in user.
        if ($currentUserOwnsComment == 1) {
            $stmt2 = $this->database->prepare("DELETE FROM $tableName WHERE id = ?");
            $stmt2->bind_param(i, $id);
            $stmt2->execute();
            mysqli_close($this->database);
            $stmt2->close();
            }
        }

  private function sanitizeTableName($tableName){
      if($tableName != "recipeMeatballs" and $tableName != "recipePancakes"){
               throw new \Exception("Illegal database table requested");
               }
 }
}
