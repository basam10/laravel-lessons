<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/users/{username}/{age}/{address}', function($username, $age, $address){
    // return "Hello world";
    return json_encode([
        "username" => $username,
        "age" => $age,
        "address" => $address
    ]);
});

Route::get('/login', function(){
    return view('login_page');
});