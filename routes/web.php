<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderDetailController;
use App\Models\Category;

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

Route::get('/',[ProductController::class,'index'])->middleware('auth')->name('product');
Route::post('/save-products',[ProductController::class, 'save_products'])->name('saveProducts');
Route::get('/delete-products/{id}', [ProductController::class, 'delete_products'])->name('removeProducts');
Route::get('/update-products/{id}', [ProductController::class, 'update_products'])->name('updateProducts');
Route::post('/save-updated-products', [ProductController::class, 'save_updated_products'])->name('saveUpdatedProducts');

Route::middleware(['auth'])->group(function () {
    Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');
});

Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('login.submit');
Route::get('/logout',[AuthController::class,'logout'])->middleware('auth')->name('logout');

Route::get('/register',[AuthController::class,'registration'])->name('registration');
Route::post('/register',[AuthController::class,'register'])->name('register');