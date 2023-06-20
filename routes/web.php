<?php
use App\Http\Controllers\GoodController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
/*
 *
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('home');
Route::get('/categories', [App\Http\Controllers\IndexController::class, 'categories'])->name('categories');
Route::get('/goods', [App\Http\Controllers\GoodController::class, 'index'])->name('goods');
Route::get('/aboutus', [App\Http\Controllers\Aboutus::class, 'index'])->name('aboutus');
Route::get('/goods/{good}', 'App\Http\Controllers\GoodController@show')->name('goods.show');
Route::resource('orders', OrderController::class);
Route::post('/order', [OrderController::class, 'store'])->name('order.store');
Route::get('/order/{order}', [OrderController::class, 'show'])->name('order.show');

Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::post('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::post('/cart/increment/{id}', [App\Http\Controllers\CartController::class, 'incrementQuantity'])->name('cart.increment');
    Route::post('/cart/decrement/{id}', [App\Http\Controllers\CartController::class, 'decrementQuantity'])->name('cart.decrement');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

});

Route::post('/checkout', [CartController::class, 'checkout'])->name('checkout');
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


