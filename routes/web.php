<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LeadController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});


Route::middleware('auth')
    ->prefix('admin') // Prefisso nell'url delle rotte di questo gruppo
    ->name('admin.') // inizio di ogni nome delle rotte del gruppo
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
          // Rotte per gestire i progetti eliminati
          Route::get('projects/trash', [ProjectController::class, 'trash'])->name('projects.trash'); // Mostra tutti gli elementi eliminati
        
          Route::put('projects/restore/{project:slug}', [ProjectController::class, 'restore'])->name('projects.restore'); // Ripristina un elemento eliminato
          Route::delete('projects/force-delete/{project:slug}', [ProjectController::class, 'forceDelete'])->name('projects.force-delete'); // Elimina definitivamente un elemento
  
        //rotte Type
        Route::resource('projects/types', TypeController::class);

        Route::resource('projects', ProjectController::class)->
        parameters(['projects'=>'project:slug']);

        //rotta per user che servono solo due
        Route::resource('users', UserController::class)->only('edit', 'update');

        Route::resource('leads', LeadController::class)->except('store', 'create');


        
    });

require __DIR__ . '/auth.php';
