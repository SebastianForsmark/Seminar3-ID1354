<?php

namespace TastyRecipes\Model;

use TastyRecipes\Integration\DatabaseConnector;


class CommentManager {

    private $dbConnector;

    public function __construct() {
        $this->dbConnector = new DatabaseConnector;
    }


    public function addComment($pageName, $commentToAdd) {
      $this->dbConnector->commentIntoDatabase($pageName, $commentToAdd->getUsername(), $commentToAdd->getDate(), $commentToAdd->getComment());
    }


    public function fetchComments($pageName) {
        $comments = array();
        $result = $this->dbConnector->commentsFromDatabase($pageName);
        while ($row = $result->fetch_assoc()) {
            $commentEntry = new Comment($row['id'], $row['username'], $row['comment'], $row['date']);
            array_push($comments, $commentEntry);
        }
        return $comments;
    }


    public function deleteComment($tableName, $id, $currentUser) {
        $this->dbConnector->deleteCommentFromDatabase($tableName, $id, $currentUser);
    }

}
