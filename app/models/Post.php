<?php

class Post extends Eloquent {

    protected $table = 'tblThreads';

    public function getUser() {
        return $this->belongsTo('User');
    }

}