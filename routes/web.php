<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Do for all routes

Route::view('/','welcome');
    
Route::group(['prefix' =>'{language}'], function (){
    
    Route::view('/','welcome');
    
    Route::view('organisation','organisation')->name('organisation');  
    
    Route::post('organisation','organisationController@store');
    Route::get('organisation/{id}','organisationController@store'); 

    Route::post('compagne.create/{id}','compagneController@storeC');
    Route::post('compagne.rajout/{id}','compagneController@storeC');

    Route::view('compagne.create/{id}','compagne.create')->name('compagne.create');
    Route::view('compagne.create/','compagne.create')->name('compagne.create');
    Route::post('compagne.create/', 'compagneController@storeC');
    Route::post('compagne.rajout/','compagneController@storeC');

    Route::view('compagne.rajout/','compagne.rajout')->name('compagne.rajout');
    
    Route::view('sujet.create/','sujet.create')->name('sujet.create'); 
    Route::post('sujet.create','sujetController@storeS');

    Route::view('sujet.dimension/','sujet.dimension')->name('sujet.dimension'); 
    Route::post('sujet.dimension','dimensionController@storeD');

    Route::view('sujet.Rdimension/','sujet.Rdimension')->name('sujet.Rdimension'); 
    Route::post('sujet.Rdimension','dimensionController@storeD');

    Route::view('compagne.voir/','compagne.voir')->name('compagne.voir');
    
    Route::view('sujet.voir/','sujet.voir')->name('sujet.voir');
    Route::post('sujet.voir/','sujetController@affecteS');


    Route::view('compagne.critere/','compagne.critere')->name('compagne.critere');
    Route::post('compagne.critere','critereController@storeCr');
    
    Route::view('compagne.critereRajout/','compagne.critereRajout')->name('compagne.critereRajout');
    Route::post('compagne.critereRajout','critereController@storeCr');


    Route::view('compagne.proposition/','compagne.proposition')->name('compagne.proposition');
    Route::post('compagne.proposition/','propositionController@storeP');

    Route::view('user.user/','user.user')->name('user.user');
    Route::post('user.user/','userController@showUser'); 

    Route::view('user.affecteUser/','user.affecteUser')->name('user.affecteUser');
    Route::post('user.affecteUser/','userController@affectCompagnes');  
  
    Route::view('user.accederQuestionnaire/','user.accederQuestionnaire')->name('user.accederQuestionnaire');

    Route::view('user.questionnaire1/','user.questionnaire1')->name('user.questionnaire1');
    Route::post('user.questionnaire1/','userController@getSubject');

    Route::view('user.sujet/','user.sujet')->name('user.sujet');
     

    Auth::routes();

    Route::view('home/','home')->name('home');
    Route::get("auth.register", "mailController@formMessageGoogle");
    Route::post("auth.register", "mailController@sendMessageGoogle")->name('auth.register');
});
