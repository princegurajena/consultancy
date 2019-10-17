<?php /** @noinspection VirtualTypeCheckInspection */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/** @noinspection PhpUndefinedVariableInspection */

use Illuminate\Support\Facades\Route;

/** @var Route $router */

$router->get('/', function () use ($router) {
    return view('welcome');
});
