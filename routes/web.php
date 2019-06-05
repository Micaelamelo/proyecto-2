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


Auth::routes();

Route::view("/{path?}", "react")->middleware("auth");

Route::get("/user", "UserController@user");//->middleware("auth");
Route::get("/users", "UserController@index");//->middleware("auth");

Route::get('/predictions', 'PredictionController@index'); //muestra el listado de predicciones de un usuario
Route::post("/predictions","PredictionController@store")->middleware("auth"); //cuando creo una nueva prediccion

//Route::get("/predictions/{prediction}","PredictionController@show");
//Route::post("/predictions/{prediction}","PredictionController@storeCuadro");

//Route::put("/predictions/{prediction}","PredictionController@update"); //cuando edito una prediccion
//Route::delete("/predictions/{prediction}", "PredictionController@delete"); //cuando elimino una prediccion