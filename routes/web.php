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
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/services/strategy', function () {
    return view('services.strategy');
});

Route::get('/services/organisation', function () {
    return view('services.organization');
});

Route::get('/services/people', function () {
    return view('services.people');
});

