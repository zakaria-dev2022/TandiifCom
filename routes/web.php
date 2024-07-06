<?php

use App\Http\Controllers\CarwashController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommentairesController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FormController;
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

Route::get('/',[CarwashController::class,'index'])->name('carwash.index');
Route::post('/form_reservation',[CarwashController::class,'store'])->name('carwash.store');
//partie Formulaire de employee
Route::get('/Rejoignez-nous', [CarwashController::class, 'create'])->name('Rejoignez-nous.create');
Route::post('/demande_employee',[CarwashController::class,'demande_employee'])->name('demande_employee.demande_employee');
// Route::get('/Rejoignez-nous', [FormController::class, 'showForm'])->name('formulaire');
// Route::post('/submit-formulaire', [FormController::class, 'submitForm'])->name('submit.formulaire');
// Route::post('/soumettre-formulaire', [FormController::class, 'soumettreFormulaire'])->name('soumettre.formulaire');
//partie dashboard*********************************
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
// Route::get('/dashboard', function () {
//     return view('dashboard.dashboard');
// });
Route::resource('employees', EmployeeController::class);
Route::resource('clients', ClientController::class);
Route::resource('reservations', ReservationsController::class);
Route::resource('tachs', TachsController::class);
Route::resource('services', ServicesController::class);
Route::resource('commentaires', CommentairesController::class);
Route::resource('parametre', ParametreController::class);
Route::resource('demandes', DemandeController::class);


