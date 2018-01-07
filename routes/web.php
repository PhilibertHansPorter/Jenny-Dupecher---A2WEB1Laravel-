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

use App\Mail\ContactMessageCreated;

Route::get('/', 'WelcomeController@welcome');
Route::get('/mes-articles', 'UserController@articles')
    ->name('user.articles')
    /*->middleware('auth')*/;

    Route::get('/test-email', function (){
            return new ContactMessageCreated('Max', 'madmax443@gmail.com', 'merci boy');
    });


Route::resource('/blog', 'BlogController');
Auth::routes();

Route::get('/home', 'HomeController@index')
    ->name('home');
//Route::get('/articles', ['as' => 'myArticles', 'uses' => 'UserController@']);
Route::post('/blog/comments/{id}', 'CommentsController@store');
Route::get('blog/comments/update/{id}', 'CommentsController@showUpdateCommentForm');
Route::post('/blog/comments/update/{id}', 'CommentsController@update');

// contact
Route::get('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactsController@create'
]);

Route::post('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactsController@store'
]);
// dada


