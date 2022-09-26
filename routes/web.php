<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\settingsController;

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
    return view('Dashboard');
});
Route::get('cost center', function () {
    return view('Settings/cost-center');
});
Route::get('labourers', function () {
    return view('Settings/labourers');
});
Route::get('materials', function () {
    return view('Settings/materials');
});
Route::get('material', function () {
    return view('Transactions/Material');
});
Route::get('equipment', function () {
    return view('Transactions/Equipment');
});
Route::get('labour', function () {
    return view('Transactions/Labour');
});
Route::get('services', function () {
    return view('Transactions/Services');
});
Route::get('subcontractor', function () {
    return view('Transactions/Subcontractor');
});
Route::get('vat', function () {
    return view('Transactions/Vat');
});
Route::get('Material Reports', function () {
    return view('Reports/Material');
});
Route::get('Job Reports', function () {
    return view('Reports/Job');
});
Route::get('Vat Reports', function () {
    return view('Reports/Vat');
});
Route::get('Labour Reports', function () {
    return view('Reports/Labour');
});
Route::resource('projects', settingsController::class);