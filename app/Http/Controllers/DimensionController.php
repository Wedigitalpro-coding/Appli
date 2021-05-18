<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dimension;

class DimensionController extends Controller
{
    public function storeD(Request $req,$id)
    {

        $dimension=new dimension();
         
        $dimension->titre=$req->titre;
        $dimension->type=$req->type;
        $dimension->nombre=$req->nombre;
        
        
        $dimension->idSujet=request()->id;
        

        $dimension->save();
        return redirect()->route('sujet.Rdimension', ['id' =>request()->id ,'language' => app()->getLocale()]);
       //  $idCompagne= $compagne->id;
        // return redirect()->route('compagne.rajout', ['id' => $compagne->id_Organisation ,'language' => app()->getLocale(), 'idC'=>$compagne]);
         
    }
}
