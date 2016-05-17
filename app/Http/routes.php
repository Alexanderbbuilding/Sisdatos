<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('secciones_estratograficas','StratigraphicSectionsController');
Route::resource('tipo_documento','DocumentTypesController');
Route::resource('tipo_carbon','CoalTypesController');
Route::resource('manto','MantlesController');
Route::resource('laboratorios','LaboratoriesController');
Route::resource('normas','RulesController');
Route::resource('plantas','PlantsController');
Route::resource('parametros_desarrollo','ParametersController');
