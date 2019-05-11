<?php

Schema::defaultStringLength(191);
Route::get('/','BlogController@index');
Route::get('/Contact-us', 'BlogController@contact');
Route::get('/About-us', 'BlogController@about');

// Admin Controller
Route::get('/dashboard', 'SuperAdminController@index');
Route::get('/admin', 'AdminController@index');
Route::post('/admin-login-check', 'AdminController@AdminLoginCheck');
Route::get('/General-setting', 'AdminController@generalSetting');
Route::get('/logout', 'SuperAdminController@logout');


//Add category

Route::get('/category', 'SuperAdminController@Category');
Route::get('/all-category', 'SuperAdminController@allCategory');
Route::post('/category-check', 'SuperAdminController@categoryCheck');
Route::get('/unpublish_category/{id}', 'SuperAdminController@unpublish_category');
Route::get('/publish_category/{id}', 'SuperAdminController@publish_category');
Route::get('/delete_category/{id}', 'SuperAdminController@delete_category');


