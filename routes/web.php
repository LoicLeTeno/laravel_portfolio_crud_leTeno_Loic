<?php

use App\Models\StaticTitre;
use App\Models\UpDown;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
    $upDowns = UpDown::all();
    $statics = StaticTitre::all();

    return view('welcome', compact('upDowns', 'statics')) ;
})->name('home');


Route::get('/backOffice', function () {
    return view('backOffice.admin');
})->name('back');


Route::get('/details', function () {
    return view('pages.portfolio-details');
})->name('details');