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


Route::get('/test', 'TestController@test');
Route::get('/test2', 'TestController@test2');

Route::get('/boards', 'BoardController@getBoardListView');
Route::get('/board/id/{id}', 'BoardController@getBoardView');
Route::get('/board/id/{board_id}/thread/{thread_id}/post/{post_id}', 'BoardController@getBoardPostView');

Route::get('/faq', 'FaqController@getFaqIndexView');

Route::get('/user/id/{user_id}/layout/{layout}', 'UserController@getUserView');
Route::get('/user/id/{user_id}', 'UserController@getUserView');