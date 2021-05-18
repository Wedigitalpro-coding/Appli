<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    public $timestamps=false;


    protected $table="organisations";

    public function compagnes(){
        return $this->hasMany('App\Compagne');
    }

    
}
