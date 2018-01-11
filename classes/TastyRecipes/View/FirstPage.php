<?php

namespace TastyRecipes\View;

use Id1354fw\View\AbstractRequestHandler;


class FirstPage extends AbstractRequestHandler{

    protected function doExecute(): string {
        return 'index';
    }

}
