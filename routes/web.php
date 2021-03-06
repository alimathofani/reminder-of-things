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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'PostController@index')->name('post.index');
Route::get('/post/create', 'PostController@create')->name('post.create');
Route::post('/post/create', 'PostController@store')->name('post.store');
Route::get('/post/{post}', 'PostController@show')->name('post.show');
Route::get('/post/{post}/edit', 'PostController@edit')->name('post.edit');
Route::patch('/post/{post}/edit', 'PostController@update')->name('post.update');
Route::delete('/post/{post}/delete', 'PostController@destroy')->name('post.destroy');
Route::post('/post/{post}/comment', 'PostCommentController@store')->name('post.comment.store');


Route::get('/admin', 'DashboardController@index')->name('admin.index');


Route::get('/admin/branch', 'BranchController@index')->name('branch.index');
Route::get('/admin/branch/create', 'BranchController@create')->name('branch.create');
Route::post('/admin/branch/create', 'BranchController@store')->name('branch.store');
Route::get('/admin/branch/{branch}/edit', 'BranchController@edit')->name('branch.edit');
Route::patch('/admin/branch/{branch}/edit', 'BranchController@update')->name('branch.update');
Route::delete('/admin/branch/{branch}/delete', 'BranchController@destroy')->name('branch.destroy');

Route::get('/admin/employee', 'EmployeeController@index')->name('employee.index');

Route::get('/admin/{slug}', 'BranchController@getSingle')->where('slug', '[\w\d\-\_]+')->name('branch.single');




