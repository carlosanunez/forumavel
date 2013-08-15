<?php

class Thread extends Eloquent {

    protected $table = 'tblThreads';

    public function getPosts() {
        return $this->hasMany('Post');
    }

    public function getUser() {
        return $this->belongsTo('User');
    }
    public function getPostCount() {
        return $this->getPosts()->get()->count();
    }
}