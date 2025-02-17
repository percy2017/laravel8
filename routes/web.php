<?php

use Illuminate\Support\Facades\Route;
use App\Donante;
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

Route::get('/', function () {
    // return view('welcome');
    return redirect("/admin");
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::get('/template', function () {
        // return view('welcome');
        return view("template");
    });
    Route::get('/donantes', function () {
        // return view('welcome');
        $midata = Donante::all();
        //return $midata;
        return view("donantes", compact('midata'));
    });
    
});
