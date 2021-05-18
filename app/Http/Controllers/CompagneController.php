<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compagne;
use App\Organisation;

class CompagneController extends Controller
{

    public function storeC(Request $req,$id)
    {

        $compagne=new Compagne();
         
        $compagne->numCompagne=$req->numCompagne;
        $compagne->dateEnvoi=$req->dateEnvoie;
         $compagne->dateRecepttion=$req->dateReception;
          $compagne->dernierDelaiEvaluation=$req->dernierDateEvaluation;
            $compagne->idSujet=0;
          //$compagne->id_Organisation=$req->organisations;
        
          $compagne->id_Organisation=request()->id;
          
         // $organisation->compagne()->associate($compagne);
         // $organisation->compagne()->save($compagne);

        $compagne->save();
         $idCompagne= $compagne->id;
         //return redirect('compagne.rajout/'.$req->route('id'),app()->getLocale())->with('jsAlert', 'State saved correctly!!!');
         return redirect()->route('compagne.rajout', ['id' => $compagne->id_Organisation ,'language' => app()->getLocale(), 'idC'=>$compagne]);
         //return redirect()->back() ->with('alert', 'Updated!');
         //return redirect('compagne.create/'.$idOrganisation)->with('message', 'State saved correctly!!!');
    }

    
   
}