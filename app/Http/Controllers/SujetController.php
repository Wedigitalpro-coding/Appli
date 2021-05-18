<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sujet;
use App\Compagne;


class SujetController extends Controller
{
    
    public function storeS(Request $req)
    {



      $sujet=new Sujet();
         
      $sujet->titre=$req->titre;
      $sujet->description=$req->description; 
      $sujet->save();

   return redirect()->route('sujet.dimension', ['id' =>$sujet->id ,'language' => app()->getLocale()]);

    }

   public function affecteS(Request $req)
   {
        $compagne = request()->id;
        
        \App\Compagne::where('id_Compagne', $compagne)->update(['idSujet' => $req->ssujet]);
    }


}
