<?php

namespace TastyRecipes\View;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Util\Constants;

class AddComment extends AbstractRequestHandler {

    private $recipePage, $commentText;

    public function setRecipePage ($recipePage) {
      $this->recipePage = ((!empty($recipePage) and ctype_alpha($recipePage)) ? $recipePage : false);
    }
    public function setComment($commentText) {
      $this->commentText = ((!empty($commentText) and ctype_print($commentText)) ? $commentText : false);
    }

    protected function doExecute(): string {
        if($this->recipePage and $this->commentText){
        $controller = $this->session->get(Constants::CONTROLLER);
        $controller->addComment($this->recipePage, $this->session->get('currentUser'), $this->commentText);
        }
        else{
          echo("Sorry there was a problem with adding your comment, please try again");
        }
        $address = "location: /TastyRecipes/View/";
        \header($address.$this->recipePage);
    }

}
