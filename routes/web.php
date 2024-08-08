<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;


//admin
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products', [ProductsController::class, 'products'])->name('products');
Route::get('/best', [ProductsController::class, 'best'])->name('best');
Route::get('/view', [ProductsController::class, 'view'])->name('view');

Route::get('/search', [ProductsController::class, 'search'])->name('products.search');
Route::get('/products/detail/{products_id}', [ProductsController::class, 'detail'])->name('productsdetail');
Route::get('/products/categories/{category_id}', [ProductsController::class, 'products'])->name('productsByCategoryId');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::post('/cart', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/cart/destroy', [CartController::class, 'destroy'])->name('cart.destroy');



Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'processPayment'])->name('checkout.process');


Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/forgot', [AuthController::class, 'forgot'])->name('forgot');



//admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/productlist', [AdminController::class, 'productlist'])->name('productlist');
Route::post('/productadd', [AdminController::class, 'productadd'])->name('productadd');
Route::get('/productdelete/{id}', [AdminController::class, 'productdelete'])->name('productdelete');
Route::get('/productupdateform/{id}', [AdminController::class, 'productupdateform'])->name('productupdateform');
Route::put('/productupdate/{id}', [AdminController::class, 'productupdate'])->name('productupdate');

Route::get('/category', [AdminController::class, 'category'])->name('category');
Route::post('/categoryadd', [AdminController::class, 'categoryadd'])->name('categoryadd');
Route::get('/categorydelete/{id}', [AdminController::class, 'categorydelete'])->name('categorydelete');
Route::get('/categoryedit/{id}', [AdminController::class, 'categoryedit'])->name('categoryedit');
Route::put('/categoryupdate/{id}', [AdminController::class, 'categoryupdate'])->name('categoryupdate');
Route::put('/categoryhide/{id}', [AdminController::class, 'categoryhide'])->name('categoryhide');
Route::put('/categoryunhide/{id}', [AdminController::class, 'categoryunhide'])->name('categoryunhide');


