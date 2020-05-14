<?php

use App\ContactUs;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

// Momentario en espera de controlers

Route::get('/config', function () {
    return view('config');
})->middleware('auth');

Route::get('/listas', 'ListaController@index')->name('listas')->middleware('auth');
Route::get('/listas/create', 'ListaController@create')->name('create')->middleware('auth');
Route::post('/listas', 'ListaController@store')->middleware('auth');

Route::get('/personal', function () {
    return view('personal');
})->middleware('auth');

//contacto controller

Route::get('contact-us', 'ContactUsController@contactUs')->middleware('auth');


Route::post('contact-us', [
    'as' => 'contactus.store',
    'uses' => 'ContactUsController@contactUsPost'
]);