<?php

namespace TastyRecipes\View;

use Id1354fw\View\AbstractRequestHandler;


class Logout extends AbstractRequestHandler{

    protected function doExecute(): string {
        $this->session->invalidate();
        $this->session->restart();
        \header('location: /TastyRecipes/DefaultRequestHandler');
    }

}
