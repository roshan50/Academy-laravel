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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function()
{
    return View::make('pages.home');
});

Route::get('courses', function()
{
    return View::make('pages.courses');
});

Route::get('login', function()
{
    return View::make('pages.login');
});

Route::get('profile', function()
{
    return View::make('pages.profile');
});