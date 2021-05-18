<?php

namespace App\Http\Controllers;
use App\Proposition;

use Illuminate\Http\Request;

class PropositionController extends Controller
{
    public function storeP(Request $req,$id)
    {

        $proposition1=new Proposition();
        $proposition2=new Proposition();
        $proposition3=new Proposition();
        $proposition4=new Proposition();
        $proposition5=new Proposition();
         
        $proposition1->titre=$req->p1;
        $proposition1->idCritere=request()->idC;

        $proposition2->titre=$req->p2;
        $proposition2->idCritere=request()->idC;

        $proposition3->titre=$req->p3;
        $proposition3->idCritere=request()->idC;
          
        $proposition4->titre=$req->p4;
        $proposition4->idCritere=request()->idC;

        $proposition5->titre=$req->p5;
        $proposition5->idCritere=request()->idC;

        $proposition1->save();
        $proposition2->save();
        $proposition3->save();
        $proposition4->save();
        $proposition5->save();

       // $idCritere= $critere->id;
    //return redirect()->route('compagne.critereRajout', ['id' => request()->id ,'language' => app()->getLocale(),'idC'=>$idCritere]);
    }
}
