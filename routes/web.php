<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// membuat controller yang berisi function agar route tidak penuh yaw
// parameternya dibuat array, yang pertama adalah nama controller danyang kedua adalah nama function

// lalu kita makae controller di cmd -> php artisan make:controller categoryController
// lalu kita buat function di controller
// arahkan ke function yang kita buat di controller
Route::get('/index', [categoryController::class, 'getAllCategory']);

// lalu kita buat route untuk product by category
// lalu kita buat function di controller
// arahkan ke function yang kita buat di controller
Route::get('/product/{category}', [productController::class, 'getAllProductbyCategory']);

Route::get('/detail-product/{id}', [productController::class, 'getProductDetail']);

Route::post('/add-shopping-cart', [productController::class, 'addToCart'])->name('add-shopping-cart');

Route::get('/shopping-cart', [productController::class, 'getShoppingCart']);
