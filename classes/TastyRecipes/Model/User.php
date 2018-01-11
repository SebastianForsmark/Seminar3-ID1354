<?php


namespace TastyRecipes\Model;
use TastyRecipes\Integration\DatabaseConnector;


class User {
    private $dbConnector;
    private $username;
    private $password;
    private $email;
    public  $loggedIn = false;

            public function __construct() {
                $arguments = func_get_args();
                switch(func_num_args()){
                  case 2:
                      self::constructWithoutEmail($arguments[0], $arguments[1]);
                      break;
                  case 3:
                      self::constructWithEmail($arguments[0], $arguments[1], $arguments[2]);
                      break;
                }
        }
        function constructWithoutEmail($username, $password)
        {
          $this->dbConnector = new DatabaseConnector();
          $this->username = $username;
          $this->password = $password;
        }
        function constructWithEmail($username, $password, $email)
        {
          $this->dbConnector = new DatabaseConnector();
          $this->username = $username;
          $this->password = $password;
          $this->email = $email;
        }

    public function login() {
        $result = $this->dbConnector->loginQuery($this->username);
        if (password_verify($this->password, $result['hashedPass'])) {
          $this->loggedIn = True;
          $this->email = $result['userEmail'];
        }
    }

    public function register() {
      return $this->dbConnector->addUserToDatabase($this->username, $this->email, $this->password);
    }

    public function getUsername() {
        return $this->username;
    }

    public function isLoggedIn() {
        return $this->loggedIn;
    }

}
