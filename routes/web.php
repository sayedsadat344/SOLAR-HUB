<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Auth\Dashboard\Category;
use App\Livewire\Auth\Dashboard\Dashboard;
use App\Livewire\Auth\Dashboard\Product;
use App\Livewire\Auth\Dashboard\Products\AddProduct;
use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;


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







Route::middleware(['auth','verified'])->group(function () {

    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/products', Product::class)->name('products');
    Route::get('/products/add', AddProduct::class)->name('add-product');
    Route::get('/product/category', Category::class)->name('product-category');
    Route::get('/sale/items', AddProduct::class)->name('sale-items');
});


// Route::get('/dashboard', function () {
//     return view('auth.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('auth.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/counter', Counter::class);
});

require __DIR__.'/auth.php';
