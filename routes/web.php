<?php

use App\Http\Controllers\user\DashboardController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::prefix('user/')->middleware('auth', 'user')->name('user.')->group(function () {
    Route::resource('dashboard', DashboardController::class);
});

require __DIR__ . '/auth.php';
