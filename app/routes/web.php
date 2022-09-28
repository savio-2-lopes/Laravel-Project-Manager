<?php

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

Route::get('/', Home::class)->name('index');

// Clientes
Route::resource('clients', ClientController::class);

// Projetos
Route::get('/projects', [
  ProjectController::class, 'index'
])->name('projects.index');

Route::get('/projects/{project}', [
  ProjectController::class, 'show'
])->name('projects.show');

// Route::resource('employees', EmployeeController::class);
// Route::resource('projects', ProjectController::class);