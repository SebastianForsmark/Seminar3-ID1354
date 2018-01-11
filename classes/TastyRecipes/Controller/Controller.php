<?php


namespace TastyRecipes\Controller;

use TastyRecipes\Model;


class Controller {

    private $commentManager;

    public function __construct() {
      $this->$commentManager = new Model\CommentManager;
    }

    public function login($username, $password) {
        $currentUser = new Model\User($username, $password);
        $currentUser->login();
        if ($currentUser->isLoggedIn()) {
            return $currentUser->getUsername();
        } else {
            return false;
        }
    }

    public function registerUser($username, $password, $email) {
        $newUser = new Model\User($username, $password, $email);
        $successfulRegistration = $newUser->register();
        return $successfulRegistration;
    }

    public function addComment($pageName, $username, $commentText) {
        $this->$commentManager->addComment($pageName, new Model\Comment($username, $commentText, date('Y-m-d')));
    }

    public function retrieveComments($pageName) {
        return $this->$commentManager->fetchComments($pageName);
    }

    public function deleteComment($pageName, $id, $currentUser) {
        $this->$commentManager->deleteComment($pageName, $id, $currentUser);
    }

}
