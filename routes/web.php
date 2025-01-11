<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TournamentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/register-tournament', [HomeController::class, 'viewForm'])->name('viewform');
Route::get('/tournaments', [TournamentController::class, 'viewTournament'])->name('view-tournament');


Route::get('/view_stats', [HomeController::class, 'viewStats'])->name('view-stats');

Route::post('/tournament/register/{tournament}',
    [RegistrationController::class, 'store'])->name('registrations.store')->middleware('auth');

Route::get('/tournament-winners', [\App\Http\Controllers\TournamentWinnersController::class, 'index'])->name('tournament.winners');

//Route::get('/submitForm', [HomeController::class, 'submitForm'])->name('form.submit');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
