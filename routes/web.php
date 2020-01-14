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



//Contacto
Route::get('contact-us', 'ContactUSController@contactUS')->name('contact-us');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);





//Articulos
Route::get('articulo/{slug}','ArticleController@show')->name('articulo.show');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('','StaticController@home');
Route::get('articulos/{categoria_id}','CategorieController@categ')->name('articulos.categ');

//Admin
Route::resource('articulo', 'AdminController');
Auth::routes(['register' => false]);


Route::prefix('admin')->name('admin.')->middleware('auth')->group(function(){
    Route::get('tablehome','AdminController@showtable')->name('tablehome');
    Route::get('articulo/create','AdminController@create')->name('articulo.create');
    Route::get('', 'HomeController@index')->name('index');
    Route::get('articulo/{id}','AdminController@edit')->name('articulo.edit');
    Route::post('articulo/{id}','AdminController@update')->name('articulo.update');
    Route::get('articulo/{slug}/delete','AdminController@delete')->name('articulo.delete');

});



//coments
Route::resource('coments', 'ComentsController');
//Route::get('/{post_id}', 'CommentsController@show')->name('posts.show');

Route::get('/post/{id}', 'ComentsController@show')->name('posts.show');


