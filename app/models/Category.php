<?php
class Category extends Eloquent {
     protected $table = 'tblCategories';
     
     public function getForums() {
         return $this->hasMany('Forum');
     }
}