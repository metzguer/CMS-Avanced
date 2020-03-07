<?php

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


// Routes Fronted  public
Route::get("/", "PageController@index")->name("home");

Route::get("/quienes-somos", "PageController@nosotros")->name("quienes-somos");
Route::get("/mision", "PageController@mision")->name("mision");
Route::get("/vision", "PageController@vision")->name("vision");
Route::get("/contacto", "PageController@contacto")->name("contacto");

Route::get("/blog", "BlogController@index")->name("blog");

Route::get('/home', function(){

	return redirect()->route("dashboard");
});

Auth::routes();


