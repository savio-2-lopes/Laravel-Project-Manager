<?php

use App\Http\Controllers\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Home;
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

// Autenticação
Route::controller(AuthController::class)->group(function () {
  Route::post('login', 'login')->name('authentication.login');
  Route::post('register', 'register')->name('authentication.register');
  Route::post('logout', 'logout');
  Route::post('refresh', 'refresh');
});

// Telas de Autenticação
Route::get('signin', [Auth::class, 'signin'])->name('auth.login');
Route::get('signup', [Auth::class, 'signup'])->name('auth.register');

// Home
Route::get('/', Home::class)->name('index');
// Clientes
Route::resource('clients', ClientController::class);
// Funcionários
Route::resource('employees', EmployeeController::class);
// Projetos
Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
