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

Route::get('/', 'IndexController@index')->name('index');
Route::get('article/{id}', 'IndexController@show')->name('articleShow');
Route::get('page/add', 'IndexController@add')->name('articleAdd');
Route::post('page/add', 'IndexController@store')->name('articleStore');
Route::delete('page/delete/{article}', function (\App\Article $article) {
  //$article_tmp =  \App\Article::where('id',$article)->first();
  $article->delete();
  return redirect('/');
})->name('articleDelete');
