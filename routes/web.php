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
Auth::routes(['register' => false]);
/*Route::get('login', function()
{
    return redirect('auth/login');
});
*/

/*Route::get('articulo/{slug}/edit','AdminController@edit');
Route::patch('articulo/{slug}','AdminController@update')->name('articulo.update');*/
/*
Route::post('articulo/{slug}/updateT', 'AdminController@updateT');
Route::get('articulo/{slug}/update','AdminController@update')->name('articulo.update');
Route::get('articulo/{slug}/edit','AdminController@edit')->name('articulo.edit');*/

Route::resource('articulo', 'AdminController');
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function(){
    Route::get('', 'HomeController@index')->name('index');
    Route::get('articulo/{slug}','AdminController@edit')->name('articulo.edit');
    Route::post('articulo/{slug}','AdminController@update')->name('articulo.update');
    Route::get('articulo/{id}/delete','AdminController@delete')->name('articulo.delete');
    Route::get('articulo/create','AdminController@create')->name('articulo.create');




});


Route::get('','StaticController@home');
//Articulos
Route::get('articulo/{slug}','ArticleController@show')->name('articulo.show');




//Contacto
/*Route::get('/contacto', 'ContactController@contact')->name('web.statics.contact');
Route::post('/contacto', 'ContactController@contactSend')->name('web.statics.contactSend');*/




