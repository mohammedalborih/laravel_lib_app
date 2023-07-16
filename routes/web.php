<?php

use Illuminate\Support\Facades\Route;
use Pusher\Laravel\Facades\Pusher;

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
//event(join(['user'=> 'library/{user}']));

Route::get('/', function () {
    return view('welcome');
});
//Route::get();
//$router->get();


Route::get('/',function(){
	 //return Redirect::to('mohammed');
	 return '<center><a href="library"><h1>Go To Library\'s Home Page</h1></a> </center>';
});


Route::get('mohammed',function(){
	return '<a href="/" Back To Home</a> <center> <h1>
	Welcome to Mohammed\'s Alborihi Web Site </h1><br /><img src="file:///D|/laravel_framwork/laravel_First_Site/pictures/1.jpg" /></center>';
});
Route::get('user/{anything}',function($anything){
	return '<h1>you have entered or attacked the URI
	pattern this argument='.$anything.'</h1>';
	})->where('anything','[0-9]+');
	
/*
Route::get('library', 'sectionController@index');

Route::get('library/create','sectionController@createNewSection');

Route::post('library/create','sectionController@saveNewSection');

Route::get('library/{sectionName}','sectionController@showSection');

Route::get('library/{sectionName}/edit','sectionController@editSection');

Route::patch('library/{sectionName}/edit','sectionController@saveEditedSection');

Route::delete('library/{sectionName}/delete','sectionController@deleteSection');*/

Route::resource('library','sectionController2');
Route::resource('books','booksController');
//Route::controller('library','sectionController');
Route::get('admin','sectionController@admin');
// Route::get('register','sectionController@register');
Route::post('library/restore/{id}','sectionController2@restore');
Route::post('library/delete-forever/{id}','sectionController2@deleteForever');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/chat', 'ChatsController@index');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');

