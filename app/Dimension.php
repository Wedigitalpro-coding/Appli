<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dimension extends Model
{
    public $timestamps=false;
    protected $table="dimensions";

    public function compagnes(){
        return $this->hasMany('App\Compagne');
    }
}
