<?php

namespace Forumavel\Controllers;

class ForumController extends BaseController {

    private $_oUser;
    protected $layout = 'forumavel.layouts.master';

    public function __construct() {
        if (\Auth::check()) {
            $this->_oUser = \User::find(\Auth::user()->id);
        }
    }

    public function getIndex() {
        return $this->getCategoryList();
    }

    public function getCategoryList() {
        return \View::make('forumavel.forum.category-list')
                ->with('oCategories', \Category::all());
    }

    public function getThreads($forumID) {
        
    }

    public function getPosts($threadID) {
        
    }

}