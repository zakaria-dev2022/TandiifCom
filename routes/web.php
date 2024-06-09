<?php

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

Route::get('/', function () {
    return view('carwash');
});
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});
Route::get('/dashboard.employees', function () {
    return view('dashboard.employees');
});
Route::get('/dashboard.clients', function () {
    return view('dashboard.clients');
});
Route::get('/dashboard.reservations', function () {
    return view('dashboard.reservations');
});
Route::get('/dashboard.tachs', function () {
    return view('dashboard.tachs');
});
Route::get('/dashboard.services', function () {
    return view('dashboard.services');
});
Route::get('/dashboard.commentaires', function () {
    return view('dashboard.commentaires');
});
Route::get('/dashboard.parametre', function () {
    return view('dashboard.parametre');
});
// Route::get('/CarWash', function () {
//     return view('carwash');
// });


