<?php



Route::get('/', function () {
    return view('welcome');
});


Route::get('ola/{nome}', 'TestController@index');
Route::get('notas', 'TestController@notas');

Route::get('blog', 'PostsController@index');
