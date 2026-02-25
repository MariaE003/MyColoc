<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\colocationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/create-colocation',[colocationController::class,'create'])->name('create.colocation')->middleware('auth');
Route::post('/save-colocation',[colocationController::class,'save'])->name('save.colocation')->middleware('auth');

Route::get('/users-disponible',[UserController::class,'usersConnecter'])->name('users-disponible')->middleware('auth');

// Route::get('/dashboard',function(){
//     return view('dashboardO');
// });



require __DIR__.'/auth.php';
