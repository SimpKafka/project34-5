<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\FrontendController;

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

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/product', [FrontendController::class, 'product'])->name('frontend.product');
Route::get('/store', [FrontendController::class, 'store'])->name('frontend.store');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin',[HomeController::class, 'admin']);

//เมนูสินค้า
Route::get('admin/product/index', [ProductController::class, 'index'])->name('p.index');
Route::get('admin/product/create', [ProductController::class, 'createform'])->name('p.create');
Route::post('admin/product/insert', [ProductController::class, 'insert'])->name('product.insert');
Route::get('admin/product/edit{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::get('admin/product/delete{id}', [ProductController::class, 'delete'])->name('product.delete');
Route::post('admin/product/update{id}', [ProductController::class, 'update'])->name('product.update');


//เมนูโปรโมชั่น
Route::get('admin/promotion/index', [PromotionController::class, 'index'])->name('pro.index');
Route::get('admin/promotion/create', [PromotionController::class, 'createform'])->name('pro.create');
Route::post('admin/promotion/insert', [PromotionController::class, 'insert'])->name('promotion.insert');
Route::get('admin/promotion/edit{id}', [PromotionController::class, 'edit'])->name('promotion.edit');
Route::get('admin/promotion/delete{id}', [PromotionController::class, 'delete'])->name('promotion.delete');
Route::post('admin/promotion/update{id}', [PromotionController::class, 'update'])->name('promotion.update');

// Route::get('resources/views/welcome', [HomeController::class, 'home'])->name('welcome.home');
// Route::get('resources/views/product', [HomeController::class, 'product'])->name('product.home');