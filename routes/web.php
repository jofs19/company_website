<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
//import indexcontroller
use App\Http\Controllers\IndexController;

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
    return view('user.index');
});

Route::get('/dashboard', function () {
    return view('user.main_master');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//redirect to About page
Route::get('/about', [IndexController::class, 'AboutPage'])->name('user.about');
Route::get('/contact', [IndexController::class, 'ContactPage'])->name('user.contact');

Route::get('/business-resource-manager', [IndexController::class, 'BRM'])->name('user.brm');


require __DIR__.'/auth.php';
