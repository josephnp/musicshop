<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransactionController;


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

Route::get('/aboutus', [UserController::class, 'aboutus']);
Route::get('/transaction', [TransactionController::class, 'transaction'])->middleware('isUser');
Route::get('/cart', [CartController::class, 'cart'])->middleware('isUser');
Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('updatecart')->middleware('isUser');
Route::get('/checkout', [CartController::class, 'checkout'])->middleware('isUser');
Route::post('/checkout/{code}', [CartController::class, 'confirm'])->name('confirmcheckout')->middleware('isUser');

Route::prefix('/profile')->group(
    function(){
        Route::get('/', [UserController::class, 'profile']);
        Route::get('/update', [UserController::class, 'updatemenu']);
        Route::post('/update', [UserController::class, 'update'])->name('updateprofile');
        Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    }
);

Route::get('/signup', [UserController::class, 'signup']);
Route::post('/signup', [UserController::class, 'register'])->name('register');

Route::get('/signin', [UserController::class, 'signin']);
Route::post('/signin', [UserController::class, 'login'])->name('login');

Route::get('/', [ProductController::class, 'index']);
Route::get('/product', [ProductController::class, 'products']);
Route::get('/product/{id}', [ProductController::class, 'showdetail']);
Route::get('/search', [ProductController::class, 'searchproduct']);
Route::get('/add/{id}', [ProductController::class, 'addtocart'])->middleware('isUser');

Route::get('/manage', [ProductController::class, 'indexproadmin'])->middleware('isAdmin');
Route::get('/searchadmin', [ProductController::class, 'searchproductadmin'])->middleware('isAdmin');
Route::get('/insertproduct', [ProductController::class, 'insertview'])->middleware('isAdmin');
Route::post('/insertproduct', [ProductController::class, 'insert'])->name('insert')->middleware('isAdmin');
Route::get('/update/{id}', [ProductController::class, 'updateview'])->middleware('isAdmin');
Route::post('/update/{id}', [ProductController::class, 'update'])->middleware('isAdmin');
Route::get('/remove/{id}', [ProductController::class, 'remove'])->middleware('isAdmin');

Route::get('/category', [CategoryController::class, 'index'])->middleware('isAdmin');
Route::post('/category', [CategoryController::class, 'store'])->name('insertc')->middleware('isAdmin');