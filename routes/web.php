<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

/*
|--------------------------------------------------------------------------
| Home Page Routes
|--------------------------------------------------------------------------
|
| Here are routes for the request quote page
|
*/
Route::group([],function(){

    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/about', 'HomeController@about')->name('about');
    Route::get('/pricing', 'HomeController@pricing')->name('pricing');
    Route::get('/services', 'HomeController@services')->name('services');
    Route::get('/products', 'HomeController@products')->name('products');
    Route::get('/faq', 'HomeController@faq')->name('faq');
    Route::get('/terms_and_conditions', 'HomeController@terms_and_conditions')->name('terms_and_conditions');
    Route::get('/privacy_policy', 'HomeController@privacy_policy')->name('privacy_policy');
    Route::get('/return_policy', 'HomeController@return_policy')->name('return_policy');

    Route::match(['GET','POST'],'/contact','ContactController@contact')->name('contact');
    Route::match(['GET','POST'],'/quote','QuoteRequestController@quote')->name('quote');

});

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
    
    //products
    Route::match(['GET','POST'],'/add_product','ProductController@add_product')->name('add_products');
    Route::match(['GET','POST'],'/manage_products','ProductController@manage_products')->name('manage_products');

    //requests
    Route::match(['GET','POST'],'/manage_requests','QuoteRequestController@manage_requests')->name('manage_requests');
    Route::match(['GET','POST'],'/admin_delete_request','QuoteRequestController@delete_request')->name('admin_delete_request');

    //contacts
    Route::match(['GET','POST'],'/manage_contacts','ContactController@manage_contacts')->name('manage_contacts');
    Route::match(['GET','POST'],'/admin_delete_contact','ContactController@delete_contact')->name('admin_manage_contacts');

});