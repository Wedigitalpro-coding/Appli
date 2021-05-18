<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Critere;

class CritereController extends Controller
{
    public function storeCr(Request $req,$id)
    {

        $critere=new Critere();
         
        $critere->titre=$req->titre;
        $critere->idCompagne=request()->id;
          
        $critere->save();
        $idCritere= $critere->id;
    return redirect()->route('compagne.critereRajout', ['id' => request()->id ,'language' => app()->getLocale(),'idC'=>$idCritere]);
    }
}
