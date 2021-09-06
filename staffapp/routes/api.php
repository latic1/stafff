<?php

use App\Http\Controllers\staff_beneficiary_controller;
use App\Http\Controllers\staff_depandant_controller;
use App\Http\Controllers\staff_employment_document_controller;
use App\Http\Controllers\staff_qualification_controller;
use App\Http\Controllers\staff_personal_detail_controller;
use App\Http\Controllers\staff_bank_details_controller;
use App\Http\Controllers\staff_employment_detail_controller;
use App\Http\Controllers\staff_cat_controller;

use App\Models\staff_personal_detail;
use App\Models\staff_employment_details;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('staff_personal_detail',staff_personal_detail_controller::class);
Route::get('/staff_personal_detail/{name}',[staff_personal_detail_controller::class,'search']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('staff_employment_details',staff_employment_detail_controller::class);
Route::get('/staff_employment_details/{name}',[staff_employment_detail_controller::class,'search']);

Route::resource('staff_bank_details',staff_bank_details_controller::class);
Route::get('/staff_bank_details/{name}',[staff_bank_details_controller::class,'search']);

Route::resource('staff_qualification',staff_qualification_controller::class);
Route::get('/staff_qualification/{name}',[staff_qualification_controller::class,'search']);

Route::resource('staff_depandant',staff_depandant_controller::class);
Route::get('/staff_depandant/{name}',[staff_depandant_controller::class,'search']);

Route::resource('staff_beneficiary',staff_beneficiary_controller::class);
Route::get('/staff_beneficiary/{name}',[staff_beneficiary_controller::class,'search']);

Route::resource('staff_employment_document',staff_employment_document_controller::class);
Route::get('/staff_employment_document/{name}',[staff_employment_document_controller::class,'search']);

Route::resource('staff_cat',staff_cat_controller::class);
Route::get('/staff_cat/{name}',[staff_cat_controller::class,'search']);

Route::get('/staff_employment_details/latic', [staff_employment_detail_controller::class, 'latic']);
// Route::post('/staff_personal_detail',[staff_personal_detail_controller::class,'store']);


//Route::get('/staff_personal_detail', [staff_personal_detail_controller::class, 'index']);
//Route::prefix('/staff_personal_detail')->group( function(){
    //Route::post('/store',[staff_personal_detail_controller::class,'store']);
    //Route::put('/{id}',[staff_personal_detail_controller::class,'update']);
    //Route::delete('/{id}',[staff_personal_detail_controller::class,'destroy']);
    //}
//);

/*Route::get('/staff_employment_details', [staff_employment_detaile::class, 'index']);
Route::prefix('/staff')->group( function(){
    Route::post('/store',[staff_employment_detaile::class,'store']);
    Route::put('/{id}',[staff_employment_detaile::class,'update']);
    Route::delete('/{id}',[staff_employment_detaile::class,'destroy']);
    }
);

Route::get('/staff_bank_details', [staff_bank_details_controller::class, 'index']);
Route::prefix('/staff')->group( function(){
    Route::post('/store',[staff_bank_details_controller::class,'store']);
    Route::put('/{id}',[staff_bank_details_controller::class,'update']);
    Route::delete('/{id}',[staff_bank_details_controller::class,'destroy']);
    }
);

Route::get('/staff_qualification', [staff_qualification_controller::class, 'index']);
Route::prefix('/staff')->group( function(){
    Route::post('/store',[staff_qualification_controller::class,'store']);
    Route::put('/{id}',[staff_qualification_controller::class,'update']);
    Route::delete('/{id}',[staff_qualification_controller::class,'destroy']);
    }
);

Route::get('/staff_depandant', [staff_depandant_controller::class, 'index']);
Route::prefix('/staff')->group( function(){
    Route::post('/store',[staff_depandant_controller::class,'store']);
    Route::put('/{id}',[staff_depandant_controller::class,'update']);
    Route::delete('/{id}',[staff_depandant_controller::class,'destroy']);
    }
);

Route::get('/staff_employment_document', [staff_employment_document_controller::class, 'index']);
Route::prefix('/staff')->group( function(){
    Route::post('/store',[staff_employment_document_controller::class,'store']);
    Route::put('/{id}',[staff_employment_document_controller::class,'update']);
    Route::delete('/{id}',[staff_employment_document_controller::class,'destroy']);
    }
);

Route::get('/staff_beneficiary', [staff_beneficiary_controller::class, 'index']);
Route::prefix('/staff')->group( function(){
    Route::post('/store',[staff_beneficiary_controller::class,'store']);
    Route::put('/{id}',[staff_beneficiary_controller::class,'update']);
    Route::delete('/{id}',[staff_beneficiary_controller::class,'destroy']);
    }
) 
*/