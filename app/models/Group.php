<?php

class Thread extends Eloquent {

    protected $table = 'tblGroups';

    public function getUsers() {
        return $this->hasMany('User', 'tblPivotUsersGroups');
    }

}