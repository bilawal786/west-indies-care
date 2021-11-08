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

Route::get('/', 'FrontendController@index')->name('front.index');
Route::get('/contact', 'FrontendController@contact')->name('front.contact');
Route::get('/single/product/{id}', 'FrontendController@product')->name('front.product');
Route::post('/fetchsubcategory', 'CategoryController@fetchsubcategory')->name('fetchsubcategory');

Route::get('/admin/login', 'FrontendController@admin')->name('admin.login');

Auth::routes();

//Admin routes
Route::group(['middleware' => ['auth', 'web', 'role']], function() {
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/general/settings', 'ContentController@settings')->name('general.settings');
Route::get('/general/about', 'ContentController@about')->name('general.about');
Route::get('/general/video', 'ContentController@video')->name('general.video');
Route::get('/general/mission', 'ContentController@mission')->name('general.mission');
Route::get('/general/slider', 'ContentController@slider')->name('general.slider');
Route::post('/general/settings/store', 'ContentController@settingStore')->name('settings.store');
Route::post('/slider//store', 'ContentController@sliderStore')->name('slider.store');
Route::post('/mission//store', 'ContentController@missionStore')->name('mission.store');
Route::post('/video//store', 'ContentController@videoStore')->name('video.store');
Route::post('/about//store', 'ContentController@aboutStore')->name('about.store');


    Route::get('/category/index', 'CategoryController@index')->name('category.index');
    Route::get('/category/delete/{id}', 'CategoryController@delete')->name('category.delete');
    Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
    Route::post('/category/store', 'CategoryController@store')->name('category.store');
    Route::post('/category/update/{id}', 'CategoryController@update')->name('category.update');

    Route::get('/subcategory/index', 'CategoryController@subcategoryindex')->name('subcategory.index');
    Route::get('/subcategory/delete/{id}', 'CategoryController@subcategorydelete')->name('subcategory.delete');
    Route::post('/subcategory/store', 'CategoryController@subcategorystore')->name('subcategory.store');

    Route::get('/product/index', 'ProductController@index')->name('product.index');
    Route::get('/product/create', 'ProductController@create')->name('product.create');
    Route::get('/product/edit/{id}', 'ProductController@edit')->name('product.edit');
    Route::get('/product/delete/{id}', 'ProductController@delete')->name('product.delete');
    Route::post('/product/store', 'ProductController@store')->name('product.store');
    Route::post('/product/update/{id}', 'ProductController@update')->name('product.update');

});
