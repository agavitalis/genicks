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
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/pricing', 'HomeController@pricing')->name('pricing');
Route::get('/services', 'HomeController@services')->name('services');
Route::get('/products', 'HomeController@products')->name('products');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/terms_and_conditions', 'HomeController@terms_and_conditions')->name('terms_and_conditions');
Route::get('/privacy_policy', 'HomeController@privacy_policy')->name('privacy_policy');

