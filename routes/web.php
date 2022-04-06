<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth/login');
});

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/dashboardUser', function () {
    return view('auth/dashboardUser');
});

Route::get('/loginAction', [App\Http\Controllers\SocialController::class, 'loginAction'])->name('loginAction');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login/{provider}', [App\Http\Controllers\SocialController::class, 'redirect']);

Route::get('/login/{provider}/callback', [App\Http\Controllers\SocialController::class, 'Callback']);

Route::get('/logout', [App\Http\Controllers\SocialController::class, 'logout']);

Route::post('/saveUser', [App\Http\Controllers\SocialController::class, 'saveUser'])->name('saveUser');

Route::post('/loginAction', [App\Http\Controllers\SocialController::class, 'loginAction'])->name('loginAction');

Route::get('paywithrazorpay', [App\Http\Controllers\SocialController::class,'payWithRazorpay'])->name('paywithrazorpay');

Route::post('payment', [App\Http\Controllers\SocialController::class,'payment'])->name('payment');

Route::post('pay', [App\Http\Controllers\SocialController::class,'pay'])->name('pay');

Route::get('/fetchRozarPayTransaction',  [App\Http\Controllers\SocialController::class, 'fetchRozarPayTransaction'])->name('fetchRozarPayTransaction');

Route::get('/error',  [App\Http\Controllers\SocialController::class, 'error'])->name('error');
