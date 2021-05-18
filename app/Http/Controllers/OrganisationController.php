<?php

namespace App\Http\Controllers;

use App\Organisation;
use Illuminate\Http\Request;

class OrganisationController extends Controller
{
    public function store(Request $req)
    {

     // request()->validate([
     //   'nom' => 'required',
     //   'specialite' => 'required',
      //  'nbrDepartement'=>'integer','required'
      //]);

         $organisation=new Organisation();

         
         $organisation->nom=$req->nom;
         $organisation->domaine=$req->domaine;
         $organisation->specialite=$req->specialite;
         $organisation->adresse=$req->adresse;
         $organisation->nbrDepartement=$req->nbrDepartement;
        
 
         
         //$organisation->compagne()->associate($compagne);
       $organisation->save();
       $idOrganisation=$organisation->id;
       $locale=app()->getLocale();
       
      //return redirect($locale.'/compagne.create/'.$idOrganisation);
      //return redirect()->route('compagne.create/', $locale);
      return redirect()->route('compagne.create', ['id' => $idOrganisation,'language' => app()->getLocale()]);
     
      
    
    }

    public function show(){
        $data=Organisation::all();
        return view('compagne.create',['organisations'=>$data]);
    }

}
