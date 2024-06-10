<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommentairesController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ParametreController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TachsController;
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
// Route::get('/dashboard.employees', function () {
//     return view('dashboard.employees');
// });
// Route::get('/dashboard.clients', function () {
//     return view('dashboard.clients');
// });
// Route::get('/dashboard.reservations', function () {
//     return view('dashboard.reservations');
// });
// Route::get('/dashboard.tachs', function () {
//     return view('dashboard.tachs');
// });
// Route::get('/dashboard.services', function () {
//     return view('dashboard.services');
// });
// Route::get('/dashboard.commentaires', function () {
//     return view('dashboard.commentaires');
// });
// Route::get('/dashboard.parametre', function () {
//     return view('dashboard.parametre');
// });

Route::resource('employees', EmployeeController::class);
Route::resource('clients', ClientController::class);
Route::resource('reservations', ReservationsController::class);
Route::resource('tachs', TachsController::class);
Route::resource('services', ServicesController::class);
Route::resource('commentaires', CommentairesController::class);
Route::resource('parametre', ParametreController::class);


