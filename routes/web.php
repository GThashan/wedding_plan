<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CheckoutController;

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
    return view('pages.home');
});
Route::get('/ser', function () {
    return view('pages.Ser');
});
Route::get('/checking', function () {
    return view('pages.checking');
})->name('checking');
Route::get('/admin', function () {
    return view('pages.Adminservice');
})->name('admin');



Route::get('/signUp', [AuthController::class, 'signUp'])->name('signUp');
Route::post('/signUp', [AuthController::class, 'signUppost'])->name('signUp.post');
Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'loginPost'])->name('login.post');
Route::get('/admin', 'AdminController@dashboard')->name('admin.dashboard');



Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/shopping-cart', [ServiceController::class, 'bookCart'])->name('shopping.cart');
Route::get('/book/{id}', [ServiceController::class, 'addBooktoCart'])->name('addbook.to.cart');
Route::patch('/update-shopping-cart', [ServiceController::class, 'updateCart'])->name('update.sopping.cart');
Route::delete('/delete-cart-product', [ServiceController::class, 'deleteProduct'])->name('delete.cart.product');
Route::delete('/admin/{id}', [ServiceController::class, 'deleteProductadmin'])->name('delete.Productadmin');
Route::post('/storeservice', [ServiceController::class, 'storeservice'])->name('storeservice');
Route::get('/admin', [ServiceController::class, 'showServices'])->name('admin');


Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/view', [CheckoutController::class, 'showProducts'])->name('view');


