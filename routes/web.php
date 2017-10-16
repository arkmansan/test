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
Route::get('/admin','AdminController@index')->name('admin');

Route::get('admin/index/sidenav','AdminController@sidenav');
Route::get('admin/login','AdminController@login');
Route::get('/tast',function() {
    return view('welcome');
});
Route::get('admin/post/index','PostController@index')->name('post_list');
Route::get('admin/post/add','PostController@add')->name('post_add');
Route::get('admin/post/edit','PostController@edit')->name('post_edit');
Route::get('admin/post/del','PostController@del')->name('post_del');

Route::post('admin/category/index','CategoryController@index')->name('category_list');
Route::get('admin/category/add','CategoryController@add')->name('category_add');
Route::any('admin/category/edit','CategoryController@edit')->name('category_edit');
Route::get('admin/category/del','CategoryController@del')->name('category_del');
