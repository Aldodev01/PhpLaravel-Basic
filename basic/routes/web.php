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

Route::view('/userview', "userview");

Route::post('/usercontroller',[UserController::class,"formSubmit"])->name("updateUser");


// Route::view("login", "users");
// Route::get('/users', function () {
//     return view('users', ['name' => 'James']);
// });
// Route::get('/loasdsa', function() {
//     $anjing = ["1", "2"];
//     $tambah = 1 + 3;
//     return view('login', compact('anjing', 'tambah'));
// });


// Route::get('/home', function() {
//     return view('home');
// });