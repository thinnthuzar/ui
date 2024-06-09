<?php
use App\Http\Controllers\TransationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/redirect', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::get('/dashboad', [App\Http\Controllers\OwnerController::class, 'dashboad'])->name('dashboad');

Route::get('/test', [App\Http\Controllers\HomeController::class, 'test'])->name('test');
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');
Route::resource('/category', CategoryController::class);
Route::resource('/admin',OwnerController::class);
Route::get('/admin', [App\Http\Controllers\OwnerController::class, 'index'])->name('admin');
Route::resource('/product', ProductController::class);
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::get('/pshow', [App\Http\Controllers\ProductController::class, 'pshow'])->name('pshow');
Route::get('/parrivals', [App\Http\Controllers\ProductController::class, 'parrivals'])->name('parrivals');
Route::post('/addTocart/{id}', [App\Http\Controllers\HomeController::class, 'addTocart'])->name('addTocart');
Route::get('/details/{id}', [App\Http\Controllers\HomeController::class, 'details'])->name('details');
Route::get('/remove_cart/{id}', [App\Http\Controllers\HomeController::class, 'remove_cart'])->name('remove_cart');
Route::get('/showCart', [App\Http\Controllers\CartController::class, 'showCart'])->name('showCart');
Route::get('/order', [App\Http\Controllers\HomeController::class, 'order'])->name('order');
Route::get('/showOrder', [App\Http\Controllers\AdminController::class, 'showOrder'])->name('showOrder');
Route::resource('payment', PaymentController::class);
Route::post('/addPayment', [App\Http\Controllers\HomeController::class, 'addPayment'])->name('addPayment');

Route::post('/transation', [App\Http\Controllers\TransationController::class, 'transation'])->name('transation');
Route::get('/first', [App\Http\Controllers\HomeController::class, 'first'])->name('first');
Route::get('/showUser', [App\Http\Controllers\AdminController::class, 'showUser'])->name('showUser');
Route::get('/index', [App\Http\Controllers\OwnerController::class, 'index'])->name('chat');
Route::get('/ordersByWeek', [App\Http\Controllers\OrderController::class, 'ordersByWeek'])->name('ordersByWeek');
Route::get('/revenueByDay', [App\Http\Controllers\OrderController::class, 'revenueByDay'])->name('revenueByDay');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
