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
/*
Route::get('/', function () {
    return view('');
});
*/
Route::view('welcome','welcome');
Route::view('/test',function()
{
return view('test');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/appointments', function(){
    return view('PatientsModule.appointments');
});
Route::get('/info',function(){
return view('PatientsModule.patientsinfo');
});
