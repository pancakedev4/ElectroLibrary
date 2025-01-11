<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', [Controllers\BaseController::class, 'getIndex']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::prefix('book')->controller(Controllers\BookController::class)->group(function() {
    Route::get('/', 'getIndex');
    Route::get('/{book}', 'getOne');
    Route::get('/{book}/order', 'postOrder');
});

Route::prefix('subscription')->controller(Controllers\SubscriptionController::class)->group(function() {
    Route::get('/', 'getIndex');
    // Route::get('/{subscription}', 'getOne');
    Route::get('/{subscription}/order', 'postOrder');
});


// Route::get('{subscription}', [Controllers\SubscriptionController::class,'getIndex']);


Route::get('{url}', [Controllers\MaintextController::class, 'getIndex']);
