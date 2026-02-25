<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\colocationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InvitationController;
use Illuminate\Support\Facades\Route;
use App\Models\Invitation;

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

Route::get('/envoyer/{id_receiver}',[InvitationController::class,'envoyerInvitation'])->name('envoyer');

// Route::get('/accepterInvitation',[InvitationController::class,'accepterInvitation'])->name('accepter');
// Route::get('/refuseInvitation',[InvitationController::class,'refuserInvitation'])->name('refuser');




// ouvrire invit (accepter / refuse)
Route::get('/invitation/{token}', function ($token) {
    $invitation = Invitation::where('token',$token)->firstOrFail();
    
    return view('invitation.response', compact('invitation'));
});


Route::post('/invitation/accept/{token}', [InvitationController::class,'accepterInvitation'])->name('invitation.accept')->middleware('auth');
Route::post('/invitation/refuse/{token}', [InvitationController::class,'refuserInvitation'])->name('invitation.refuse')->middleware('auth');




require __DIR__.'/auth.php';
