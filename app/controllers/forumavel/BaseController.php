<?php

namespace Forumavel\Controllers;

class BaseController extends \Controller {

    protected function setupLayout() {
        if (!is_null($this->layout)) {
            $this->layout = \View::make($this->layout);
        }
    }

}