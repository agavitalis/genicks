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


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here are routes for the request quote page
|
*/
Route::group(['namespace'=>"Admin"],function(){

    Route::match(['GET','POST'],'/admin_dashboard', 'DashboardController@index')->name('admin_dashboard');
    
    //stories
    Route::match(['GET','POST'],'/add_stories','StoryController@create_story')->name('add_stories');
    Route::match(['GET','POST'],'/manage_stories','StoryController@manage_stories')->name('manage_stories');
    
    Route::match(['GET','POST'],'/show/{id}','StoryController@show_details')->name('show_details');
    
    Route::match(['GET','POST'],'/edit/{id}','StoryController@edit_story')->name('edit_story');

    Route::delete('/delete/{id}','StoryController@destroy');

    //themes
    Route::match(['GET','POST'],'/create_theme','ThemeController@create_theme')->name('create_theme');

    //gallery
    Route::match(['GET','POST'],'/create_gallery','GalleryController@create_gallery')->name('create_gallery');
    
    //archieves
    Route::match(['GET','POST'],'/create_archive','ArchivesController@create_archive')->name('create_archive');
    Route::match(['GET','POST'],'/manage_archive','ArchivesController@manage_archive')->name('manage_archive');
    
});