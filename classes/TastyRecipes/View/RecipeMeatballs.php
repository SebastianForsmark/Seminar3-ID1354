<?php

namespace TastyRecipes\View;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Util\Constants;


class RecipeMeatballs extends AbstractRequestHandler {

    protected function doExecute(): string {
        $controller = $this->session->get(Constants::CONTROLLER);
        $this->addVariable('comments', $controller->retrieveComments('recipeMeatballs'));
        return 'recipeMeatballs';
    }
}
