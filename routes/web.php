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

Route::get('login','AdminController@show')->name('admin.show');
Route::get('','StaticController@home');
//Articulos
Route::get('articulo/{slug}','ArticleController@show')->name('articulo.show');

//Route::get('login','StaticController@show'); //->middleware('auth')


//Contacto
/*Route::get('/contacto', 'ContactController@contact')->name('web.statics.contact');
Route::post('/contacto', 'ContactController@contactSend')->name('web.statics.contactSend');*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
