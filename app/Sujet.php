<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sujet extends Model
{

    public $timestamps=false;
    protected $table="sujets";

    

    public function dimensions(){
        return $this->hasMany('App\Dimension');
    }

}
