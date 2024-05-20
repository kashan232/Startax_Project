<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/home', [HomeController::class, 'home'])->middleware('auth')->name('home');
Route::get('/admin-page', [HomeController::class, 'admin_page'])->middleware(['auth', 'admin'])->name('admin-page');
Route::get('/users', [HomeController::class, 'users'])->middleware(['auth', 'admin'])->name('users');

Route::get('/add-client', [ClientController::class, 'add_client'])->name('add-client');
Route::post('/store-client', [ClientController::class, 'store_client'])->name('store-client');
Route::get('/client-detail/{id}', [ClientController::class, 'client_detail'])->name('client-detail');
Route::post('/edit-client-basic-details', [ClientController::class, 'edit_client_basic_details'])->name('edit-client-basic-details');
Route::post('/store-client-address', [ClientController::class, 'store_client_address'])->name('store-client-address');
Route::post('/store-client-bank', [ClientController::class, 'store_client_bank'])->name('store-client-bank');
Route::get('/delete-store-client-bank', [ClientController::class, 'delete_store_client_bank'])->name('delete-store-client-bank');
Route::get('/delete-store-client-income-salary', [ClientController::class, 'delete_store_client_income_salary'])->name('delete-store-client-income-salary');

Route::get('/get-location-details/{pincode}', [ClientController::class, 'getLocationDetails']);
Route::get('/get-bank-details/{ifsc}', [ClientController::class, 'getBankDetails']);
Route::post('/save-income-types', [ClientController::class, 'saveIncomeTypes']);


// Income routes
// Salary routes
Route::post('/store-client-salary', [ClientController::class, 'store_client_salary'])->name('store-client-salary');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
