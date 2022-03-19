<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});
Route::resource('users', UserController::class);

// dengan menggunakan resource by default akan generate route yg dibutuhkan dan sesuai standar
// tentu saja teman2 bisa menuliskan routenya secara manual jika hanya menggunakan beberapa route yg dibutuhkan saja
// dan jika ada route yg formatnya itu tidak sesuai dengan standar
