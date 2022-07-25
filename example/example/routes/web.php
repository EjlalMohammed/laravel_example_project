<?php

use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\HospitalController;

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

Route::get('/', function () {
    return view('welcome');

});


            ############# offers routes ###########
Route::group(['prefix'=> 'offer'], function(){
    Route::get('/show',[OfferController::class,'show']);

    //insert
    Route::get('/create',[OfferController::class,'create']);
    Route::post('/store',[OfferController::class,'store'])->name('offer.store');

    //select all
    Route::get('/showoffer',[OfferController::class,'showOffer']) -> name('offer.all');

    //update
    Route::get('/edit/{offer_id}',[OfferController::class,'edit']);
    Route::post('/update/{offer_id}',[OfferController::class,'update'])->name('offer.update');

    //delete
    Route::get('/delete/{offer_id}',[OfferController::class,'delete'])->name('offer.delete');

});

    ############## relations #################

    Route::get('/hasMany',[HospitalController::class,'gethospital']);


    Route::get('/hospitals',[HospitalController::class,'hospitals'])->name('all.hospital');


    Route::get('/doctors/{hospital_id}',[HospitalController::class,'doctors'])->name('hospital.doctors');

    Route::get('/hospitals_has_doctore',[HospitalController::class,'gethospitalHasDoctore']);

    Route::get('/hospitals_has_doctore_male',[HospitalController::class,'gethospitalHasDoctoreMale']);

    Route::get('/hospitals_not_has_doctore_male',[HospitalController::class,'gethospital']);

    ############## end relations #################

    Route::get('/hospital_create',[HospitalController::class,'create']);
    Route::post('/hospital_store',[HospitalController::class,'store'])->name('hospital.store');





