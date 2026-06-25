<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\TaskController;

/*
|--------------------------------------------------------------------------
| ROOT
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return redirect()->route('dashboard');
});

/*
|--------------------------------------------------------------------------
| AUTH (TEMPORAL / SIN BREEZE)
|--------------------------------------------------------------------------
| Si luego instalas Breeze, puedes eliminar esto.
*/
Route::post('/logout', function () {
    Auth::logout();

    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/');
})->name('logout');

/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
| Ya usando Controller (correcto MVC)
*/
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

/*
|--------------------------------------------------------------------------
| ADMIN MODULES (SISTEMA UCT ESCALABLE)
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {

    /*
    |------------------------------
    | USERS
    |------------------------------
    */
    Route::resource('users', UserController::class);

    /*
    |------------------------------
    | PROJECTS
    |------------------------------
    */
    Route::resource('projects', ProjectController::class);

    /*
    |------------------------------
    | TASKS
    |------------------------------
    */
    Route::resource('tasks', TaskController::class);

});