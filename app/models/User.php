<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    protected $table = 'tblUsers';
    protected $hidden = array('password');

    public function getAuthIdentifier() {
        return $this->getKey();
    }

    public function getAuthPassword() {
        return $this->password;
    }

    public function getReminderEmail() {
        return $this->email;
    }

    public function getPosts() {
        return $this->hasMany('Post');
    }

    public function getPostCount() {
        return $this->getPosts()->get()->count();
    }

}