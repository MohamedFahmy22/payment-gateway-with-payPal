<?php
use App\Http\Controllers\PayPalController;

use Illuminate\Support\Facades\Route;

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
Route::get('/pay', [PayPalController::class, 'index']);
Route::post('payment', [PayPalController::class, 'pay'])->name('payment');
Route::get('success', [PayPalController::class, 'success']);
Route::get('error', [PayPalController::class, 'error']);
