<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/categories', [\App\Http\Controllers\frontend\CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [\App\Http\Controllers\frontend\CategoryController::class, 'show'])->name('categories.show');
Route::get('/menu', [\App\Http\Controllers\frontend\MenuController::class, 'index'])->name('menu.index');
Route::post("/addcart/{id}", [\App\Http\Controllers\frontend\MenuController::class, "addcart"]);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('suvaya')->group(function(){
    Route::get('/', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('index');
    Route::resource('/categories', \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('/menu', \App\Http\Controllers\Admin\MenuController::class);
    Route::resource('/table', \App\Http\Controllers\Admin\TablaController::class);
    Route::resource('/order', \App\Http\Controllers\admin\OrderController::class);
});


require __DIR__.'/auth.php';
