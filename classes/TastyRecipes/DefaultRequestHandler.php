<?php

namespace TastyRecipes;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipes\Util\Constants;
use TastyRecipes\Controller\Controller;
/**
 * Description of DefaultRequestHandler
 * All requests without an url matching an existing requesthandler will be redirected
 * to the applications index page.
 * @author SebastianF
 */
class DefaultRequestHandler extends AbstractRequestHandler {

    protected function doExecute(): string {
        $this->session->restart();
        $this->session->set(Constants::CONTROLLER, new Controller());

        \header('location: /TastyRecipes/View/FirstPage');
    }

}
