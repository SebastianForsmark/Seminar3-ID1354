<?php

namespace TastyRecipes\View;

use Id1354fw\View\AbstractRequestHandler;

class Register extends AbstractRequestHandler{

    protected function doExecute(): string {
        return 'register';
    }

}
