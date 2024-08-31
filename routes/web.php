<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\GameHistoryController;
use App\Http\Controllers\PageAController;
use App\Http\Controllers\PageADeactivateLinkController;
use App\Http\Controllers\PageARegenerateLinkController;
use App\Http\Controllers\UserRegistrationController;
use App\Http\Middleware\PageLinkValidationMiddleware;
use Illuminate\Support\Facades\Route;

Route::withoutMiddleware([PageLinkValidationMiddleware::class])->group(function () {
    Route::get('/', function () {return redirect('registration');});
    Route::get('registration', [UserRegistrationController::class, 'index'])->name('register-user');
    Route::post('registration-execute', [UserRegistrationController::class, 'executeRegistration'])->name('register.execute');
});

Route::get('pageA/{pageLink}/', [PageAController::class, 'index'])->name('pageA');
Route::post('pageA/{pageLink}/regenerateLink', [PageARegenerateLinkController::class, 'index'])->name('pageA.RegenerateLink');
Route::post('pageA/{pageLink}/deactivateLink', [PageADeactivateLinkController::class, 'index'])->name('pageA.DeactivateLink');

Route::post('game/{pageLink}', [GameController::class, 'index'])->name('game.index');
Route::get('game/{pageLink}/history', [GameHistoryController::class, 'index'])->name('game.history');
