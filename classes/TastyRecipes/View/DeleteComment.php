<?php

namespace TastyRecipes\View;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Util\Constants;

class DeleteComment extends AbstractRequestHandler {

    private $recipePage, $delete;

    public function setRecipePage ($recipePage) {
      $this->recipePage = ((!empty($recipePage) and ctype_alpha($recipePage)) ? $recipePage : false);
    }
    public function setDelete($delete) {
        $this->delete = (!empty($delete) ? (int) $delete : false);
    }

    protected function doExecute(): string {
      if($this->recipePage and $this->delete){
        $controller = $this->session->get(Constants::CONTROLLER);
        $controller->deleteComment($this->recipePage, $this->delete, $this->session->get('currentUser'));
        }
        $address = "location: /TastyRecipes/View/";
        \header($address.$this->recipePage);
    }

}
