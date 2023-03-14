<?php

use Illuminate\Support\Facades\Route;

// MODEL
use App\Models\Train;
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
    $trains = Train::all();
    
    return view('welcome', ['trains'=>$trains]);
});
