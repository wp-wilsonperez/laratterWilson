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
Auth::routes();
Route::get('/', 'PagesController@home');

Route::get('/auth/facebook','SocialAuthController@facebook');
Route::get('/auth/facebook/callback','SocialAuthController@callback');
Route::post('/auth/facebook/register','SocialAuthController@register');

Route::get('/messages/{message}','MessagesController@show');

Route::get('/messages', 'MessagesController@search');

Route::get('/api/messages/{messsage}/responses','MessagesController@responses');

Route::group(['middleware'=>'auth'],function(){
	Route::post('/{username}/dms','UserController@sendPrivateMessage');
	Route::post('/messages/create','MessagesController@create');
	Route::post('/{username}/follow','UserController@follow');
	Route::post('/{username}/unfollow','UserController@unfollow');
	Route::get('/conversations/{conversation}','UserController@showConversation');
});


Route::get('/{username}','UserController@show');
Route::get('/{username}/follows','UserController@follows');
Route::get('/{username}/followers','UserController@followers');





