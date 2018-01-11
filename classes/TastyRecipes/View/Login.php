<?php

namespace TastyRecipes\View;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Util\Constants;

class Login extends AbstractRequestHandler {

    private $username, $password;

    public function setUsername($username) {
      $this->username = ((!empty($username) and ctype_alnum($username)) ? $username : false);
    }

    public function setPassword($password) {
      $this->password = ((!empty($password) and ctype_alnum($password)) ? $password : false);
    }

    protected function doExecute() {
      if($this->username and $this->password){
        $controller = $this->session->get(Constants::CONTROLLER);
        $currentUser = $controller->login($this->username, $this->password);
}
        if ($currentUser == false) {
            echo("We were unable to find a user with those credentials, please try again.");
            return 'index';
        } else {
            $this->session->set('currentUser', $currentUser);
            return 'welcome';
        }
    }

}
