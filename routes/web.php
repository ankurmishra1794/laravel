<?php

use Illuminate\Support\Facades\Route;
 
Route::get('home','HomeController@getAllEmp');
Route::view('addEmp','add-emp');
Route::post('addempc','HomeController@addEmp');
Route::get('delemp','HomeController@delEmp'); 
Route::get('sngrc','HomeController@fetchSingleRecord'); 
Route::post('updempc','HomeController@updateRecord');

Route::get("test","Test@index");

