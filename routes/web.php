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
Route::get('','StaticController@home');
//Articulos
Route::get('articulo/{slug}','ArticleController@show')->name('articulo.show');

//Contacto
/*Route::get('/contacto', 'ContactController@contact')->name('web.statics.contact');
Route::post('/contacto', 'ContactController@contactSend')->name('web.statics.contactSend');*/
