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
Route::get('/', 'PagesController@index')->name('index');

Route::get('/services', 'PagesController@services')->name('services');

Route::get('/company', 'PagesController@company')->name('company');

Route::get('/finance', 'PagesController@finance')->name('finance');

Route::get('/marketing', 'PagesController@marketing')->name('marketing');

Route::get('/people', 'PagesController@people')->name('people');

Route::get('/process', 'PagesController@process')->name('process');

Route::get('/blog', 'PagesController@blog')->name('blog');

Route::get('/admin', 'PagesController@admin')->name('admin');

Route::get('/contact', 'PagesController@contact')->name('contact');

Route::post('contact', 'ContactsController@store')->name('contact.store');

Auth::routes();

Route::resource('posts', 'PostController');
