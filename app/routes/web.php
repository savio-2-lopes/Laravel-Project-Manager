<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Home;
use App\Http\Controllers\InactiveEmployee;
use App\Http\Controllers\ProjectController;
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

// Clientes
Route::resource('clients', ClientController::class);
// Funcionários
Route::resource('employees', EmployeeController::class);
// Projetos
Route::resource('projects', ProjectController::class);
// Inativar funcionário
Route::get('employees/{employee}/inativar', InactiveEmployee::class)->name('employees.inactive');
// Autenticação
Auth::routes();
// Home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
