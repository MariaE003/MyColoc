<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\colocationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DepenseController;

use Illuminate\Support\Facades\Route;
use App\Models\Invitation;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CategorieController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// 

Route::middleware(['auth', 'checkban','verified'])->group(function () {
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// ->middleware('auth')
Route::get('/create-colocation',[colocationController::class,'create'])->name('create.colocation');
Route::post('/save-colocation',[colocationController::class,'save'])->name('save.colocation');
Route::post('/colocation/{id}/cancel', [colocationController::class, 'cancelColocation'])->name('cancel.colocation');

Route::post('/colocation/{colocation}/remove-member/{user}', [MemberController::class, 'removeMember'])->name('removeMember.colocation');

Route::post('/leave-colocation', [MemberController::class, 'leaveColocation'])->name('leave.colocation');

Route::get('/mycolocation', [MemberController::class,'mycolocation'])->name('mycolocation');




// ouvrire invit (envoyer / accepter / refuse)
Route::get('/envoyer/{id_receiver}',[InvitationController::class,'envoyerInvitation'])->name('envoyer');
Route::get('/invitation/{token}', function ($token) {
    $invitation = Invitation::where('token',$token)->firstOrFail();
    return view('invitation.response', compact('invitation'));
    });
    
    
Route::post('/invitation/accept/{token}', [InvitationController::class,'accepterInvitation'])->name('invitation.accept');
Route::post('/invitation/refuse/{token}', [InvitationController::class,'refuserInvitation'])->name('invitation.refuse');
// my coloc

// depense
Route::get('/add.depense', [DepenseController::class,'create'])->name('add.depense');

// depense
Route::post('/save.depense', [DepenseController::class,'save'])->name('save.depense');
Route::get('/show.depense', [DepenseController::class,'show'])->name('show.depense');
Route::get('/depense/{id}/paid',[DepenseController::class,'markerPaye'])->name('depense.paid');
Route::post('/depense/{id}', [DepenseController::class,'delete'])->name('delete.depense');

// admin
Route::get('/admin',[UserController::class,'dashboard'])->name('admin');
Route::post('/admin/ban/{id}',[UserController::class,'banner'])->name('admin.banner');
Route::post('/admin/deban/{id}',[UserController::class,'debaner'])->name('admin.debanner');

Route::post('/payment/store', [PaymentController::class, 'store'])->name('payment.store');


// categorie
Route::get('show.categorie',[CategorieController::class, 'show'])->name('show.categorie');
Route::middleware(['owner'])->group(function(){
    Route::get('create.categorie',[CategorieController::class, 'create'])->name('create.categorie');
    Route::post('save.categorie',[CategorieController::class, 'save'])->name('save.categorie');
    Route::post('delete.categorie/{id}', [CategorieController::class, 'delete'])->name('delete.categorie'); 

});
});
require __DIR__.'/auth.php';
