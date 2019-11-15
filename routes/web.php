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

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/old', function () {
    return view('old');
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

Route::post('contact' , function (){

    $data['name'] = request('name');
    $data['email'] = request('email');
    $data['phone'] = request('phone');
    $data['message'] = request('message');

//    Mail::send('email', $data, function($message) {
//        $message->to('', 'SOP Consulting')->subject('Website contact');
//    });

   return back()->with('message' , "Thank You! " . request('name').", We will get in touch with you");

});
