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
Route::get('/board/id/{id}/page/{page}', 'BoardController@getBoardPageView');
Route::get('/board/id/{id}', 'BoardController@getBoardView');
Route::get('/board/id/{board_id}/thread/{thread_id}/post/{post_id}', 'BoardController@getBoardPostView');
Route::get('/board/get-thread-list-json', 'BoardController@getBoardPageJson');

Route::get('/thread/get-tree-json', 'MessageController@getTreeJson');
Route::get('/thread/get-message-tree-json', 'MessageController@getMessageTreeJson');
Route::get('/thread/{thread_id}', 'MessageController@getMessageTreeView');
Route::get('/post/get-message-json', 'MessageController@getMessageJson');
Route::get('/post/id/{post_id}', 'MessageController@getMessageView');
Route::get('/post/new/board/{board_id}', 'MessageController@getNewMessageView');
Route::get('/post/get-new-post-form-json', 'MessageController@getNewMessageJson');


Route::get('/faq', 'FaqController@getFaqIndexView');

Route::get('/user/id/{user_id}/layout/{layout}', 'UserController@getUserView');
Route::get('/user/id/{user_id}', 'UserController@getUserView');