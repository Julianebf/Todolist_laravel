<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Main@home')->name('home');

Route::get('/list_invisible', 'Main@list_invisible')->name('list_invisible');

Route::get('/new_task', 'Main@new_task')->name('new_task');
Route::post('/new_task_submit', 'Main@new_task_submit')->name('new_task_submit');

Route::get('/taske_done/{id}', 'Main@task_done')->name('task_done');
Route::get('/taske_undone/{id}', 'Main@task_undone')->name('task_undone');

Route::get('/edit_task_frm/{id}', 'Main@edit_task')->name('edit_task');
Route::post('/edit_task_submit', 'Main@edit_task_submit')->name('edit_task_submit');

Route::get('/taske_invisible/{id}', 'Main@task_invisible')->name('task_invisible');
Route::get('/taske_visible/{id}', 'Main@task_visible')->name('task_visible');