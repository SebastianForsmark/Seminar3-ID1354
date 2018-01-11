<?php

namespace TastyRecipes\View;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Util\Constants;

class Welcome extends AbstractRequestHandler{

  private $regUsername, $regPassword, $regEmail;

  public function setUsername($username) {
      $this->regUsername = ((!empty($username) and ctype_alnum($username)) ? $username : false);
  }
  public function setPassword($password) {
      $validatedPassword = ((!empty($password) and ctype_alnum($password)) ? $password : false);
      $this->regPassword = password_hash($validatedPassword, PASSWORD_DEFAULT);
  }
  public function setEmail($email) {
      $this->regEmail = ((!empty($email) and ctype_print($email)) ? $email : false);
  }
  
    protected function doExecute(): string {
    if($this->regUsername and $this->regPassword and $this->regEmail){
      $controller = $this->session->get(Constants::CONTROLLER);
      $registered = $controller->registerUser($this->regUsername, $this->regPassword, $this->regEmail);
}
      if ($registered) {
          echo("Welcome to Tasty Recipes! Please log in below.");
          return 'index';
      } else {
          echo("There was a problem with your registration, please verify your information and try again.");
          return 'index';
      }
    }

}
