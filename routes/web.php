<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FactsController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillsController;
use App\Models\About;
use App\Models\Contact;
use App\Models\Facts;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skills;
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
    $abouts = About::all();
    $facts = Facts::all();
    $skills = Skills::all();
    $portfolios = Portfolio::all();
    $services = Service::all();
    $contacts = Contact::all();

    return view('welcome', compact('upDowns', 'statics', 'abouts', 'facts', 'skills', 'portfolios', 'services', 'contacts')) ;
})->name('home');


Route::get('/backOffice', function () {
    $upDowns = UpDown::all();
    $statics = StaticTitre::all();
    $abouts = About::all();
    $facts = Facts::all();
    $skills = Skills::all();
    $portfolios = Portfolio::all();
    $services = Service::all();
    $contacts = Contact::all();

    return view('backOffice.admin', compact('upDowns', 'statics', 'abouts', 'facts', 'skills', 'portfolios', 'services', 'contacts')) ;
})->name('home');


Route::get('/details', function () {
    return view('pages.portfolio-details');
})->name('details');


// RESSOURCE
Route::resource('abouts', AboutController::class);
Route::resource('facts', FactsController::class);
Route::resource('skills', SkillsController::class);
Route::resource('portfolios', PortfolioController::class);
Route::resource('services', ServiceController::class);
Route::resource('contacts', ContactController::class);