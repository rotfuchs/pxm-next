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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::redirect('/', '/boards');


Route::get('/test', 'TestController@test');
Route::get('/test2', 'TestController@test2');

Route::get('/boards', 'BoardController@getBoardListView');
Route::get('/board/id/{id}/page/{page}/{slug?}', 'BoardController@getBoardPageView');
Route::get('/board/id/{id}/{slug?}', 'BoardController@getBoardView');
Route::get('/board/id/{board_id}/thread/{thread_id}/post/{post_id}/{slug?}', 'BoardController@getBoardPostView');
Route::get('/board/get-thread-list-json', 'BoardController@getBoardPageJson');
Route::get('/board', 'BoardController@getBoardRedirect');

Route::get('/thread/get-tree-json', 'MessageController@getTreeJson');
Route::get('/thread/get-message-tree-json', 'MessageController@getMessageTreeJson');
Route::get('/thread/{thread_id}/{slug?}', 'MessageController@getMessageTreeView');

Route::get('/post/get-message-json', 'MessageController@getMessageJson');
Route::get('/post/id/{post_id}/{slug?}', 'MessageController@getMessageView');
Route::get('/post/new/board/{board_id}', 'MessageController@getNewMessageView');
Route::get('/post/get-new-post-form-json', 'MessageController@getNewMessageJson');

Route::get('/search/board/{board_id}', 'SearchController@getSearchView');
Route::get('/search/get-search-form-json', 'SearchController@getSearchJson');

Route::get('/faq', 'FaqController@getFaqIndexView');

Route::get('/user', 'UserController@getSearchView');
Route::get('/user/logout', 'UserController@getLogoutRedirect');
Route::get('/user/setup/tab/{tab}', 'UserController@getSetupTabView');
Route::get('/user/setup/{layout?}', 'UserController@getSetupView');
Route::get('/user/id/{user_id}/layout/{layout}', 'UserController@getUserView');
Route::get('/user/id/{user_id}', 'UserController@getUserView');
Route::get('/user/get-user-search-form-json', 'UserController@getSearchJson');

Route::get('/mailbox/tab/{tab}', 'MailboxController@getMailboxTabView');
Route::get('/mailbox/{layout?}', 'MailboxController@getMailboxView');

Route::group(['middleware' => ['active_admin_menu:dashboard']], function()
{
    Route::get('/admin/dashboard', 'AdminController@getDashboardView');
});

Route::group(['middleware' => ['active_admin_menu:settings']], function()
{
    Route::get('/admin/settings', 'AdminController@getSettingsView');
});

Route::group(['middleware' => ['active_admin_menu:boards']], function()
{
    Route::get('/admin/boards/edit/{id}', 'AdminController@getBoardEditorView');
    Route::get('/admin/boards', 'AdminController@getBoardsView');
});

Route::group(['middleware' => ['active_admin_menu:translation']], function()
{
    Route::get('/admin/translations', 'AdminController@getTranslationView');
});

Route::group(['middleware' => ['active_admin_menu:template']], function()
{
    Route::get('/admin/templates', 'AdminController@getTemplatesView');
});

Route::group(['middleware' => ['active_admin_menu:smilies']], function()
{
    Route::get('/admin/smilies', 'AdminController@getSmiliesView');
});

Route::group(['middleware' => ['active_admin_menu:user']], function()
{
    Route::get('/admin/user', 'AdminController@getUserView');
});


Route::get('/custom/assets{filePath?}', 'ScriptRouterController@getAssetFile')->where('filePath', '(.*)');

//Route::get('/user/login', 'sx\AuthController@getLoginView');
//Route::get('/user/logout', 'sx\AuthController@getLogoutView');

//Route::post('/user/registrations', 'sx\AuthController@postIsUserValid');
//Route::post('/user/index/result/json', 'sx\AuthController@xhrGetAvailableClientsForUser');
//Route::post('/user/login', 'sx\AuthController@postLogin');
Route::post('/user/authenticate', 'UserController@postAuthenticateJson');
Route::post('/user/authenticate-redirect', 'UserController@postAuthenticateRedirect');


//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
