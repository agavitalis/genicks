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


Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('/about', 'HomeController@about')->name('about');
Route::match(['GET','POST'],'/contact','HomeController@contact')->name('contact');
Route::get('/pricing', 'HomeController@pricing')->name('pricing');
Route::get('/services', 'HomeController@services')->name('services');
Route::get('/products', 'HomeController@products')->name('products');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/terms_and_conditions', 'HomeController@terms_and_conditions')->name('terms_and_conditions');
Route::get('/privacy_policy', 'HomeController@privacy_policy')->name('privacy_policy');
Route::get('/return_policy', 'HomeController@return_policy')->name('return_policy');

/*
|--------------------------------------------------------------------------
| Quotes Routes
|--------------------------------------------------------------------------
|
| Here are routes for the request quote page
|
*/
Route::match(['GET','POST'],'/quote','QuoteRequestController@quote')->name('quote');
