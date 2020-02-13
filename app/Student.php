<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function requests(){
        return $this->belongsToMany('App\Request');
    }
}
