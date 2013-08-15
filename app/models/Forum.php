<?php

class Forum extends Eloquent {

    protected $table = 'tblForums';

    public function getThreads() {
        return $this->hasMany('Thread');
    }

    public function getThreadCount() {
        return $this->getThreads()->get()->count();
    }

    public function getPostCount() {
        $postCount = 0;
        foreach($this->getThreads()->get() as $oThread) {
            $postCount = (int) $postCount + (int) $oThread->getPostCount();
        }
        return $postCount;
    }

}