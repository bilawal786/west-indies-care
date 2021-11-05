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

Route::get('/admin/login', 'FrontendController@admin')->name('admin.login');

Auth::routes();

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
