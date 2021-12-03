<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/products', 'Api\ApiController@products');
Route::get('/product/{id}', 'Api\ApiController@product');

Route::post('login', 'Api\UserController@login');
Route::post('register', 'Api\UserController@register');
