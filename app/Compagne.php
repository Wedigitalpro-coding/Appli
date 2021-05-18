<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Compagne extends Model
{
    public $timestamps=false;

    protected $table="compagnes";

    public function organisation(){
        return $this->belongsTo('App\Organisation');
    }

    public function sujet(){
        return $this->belongsTo('App\Sujet');
    }
}
