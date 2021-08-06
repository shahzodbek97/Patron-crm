<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DealController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TaskController;

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

//Address
Route::get('/address/list', [AddressController::class, 'index']);
Route::get('/address/store', [AddressController::class, 'store']);
Route::get('/address/update/{id}', [AddressController::class, 'edit']);
Route::get('/address/delete/{id}', [AddressController::class, 'destroy']);

//Category
Route::get('/category/list', [CategoryController::class, 'index']);
Route::get('/category/store', [CategoryController::class, 'store']);
Route::get('/category/update/{id}', [CategoryController::class, 'edit']);
Route::get('/category/delete/{id}', [CategoryController::class, 'destroy']);

//Client
Route::get('/client/list', [ClientController::class, 'index']);
Route::get('/client/store', [ClientController::class, 'store']);
Route::get('/client/update/{id}', [ClientController::class, 'edit']);
Route::get('/client/delete/{id}', [ClientController::class, 'destroy']);

//Contact
Route::get('/contact/list', [ContactController::class, 'index']);
Route::get('/contact/store', [ContactController::class, 'store']);
Route::get('/contact/update/{id}', [ContactController::class, 'edit']);
Route::get('/contact/delete/{id}', [ContactController::class, 'destroy']);

//Deal
Route::get('/deal/list', [DealController::class, 'index']);
Route::get('/deal/store', [DealController::class, 'store']);
Route::get('/deal/update/{id}', [DealController::class, 'edit']);
Route::get('/deal/delete/{id}', [DealController::class, 'destroy']);

//Expense
Route::get('/exp/list', [ExpenseController::class, 'index']);
Route::get('/exp/store', [ExpenseController::class, 'store']);
Route::get('/exp/update/{id}', [ExpenseController::class, 'edit']);
Route::get('/exp/delete/{id}', [ExpenseController::class, 'destroy']);

//Notification
Route::get('/notification/list', [NotificationController::class, 'index']);
Route::get('/notification/store', [NotificationController::class, 'store']);
Route::get('/notification/update/{id}', [NotificationController::class, 'edit']);
Route::get('/notification/delete/{id}', [NotificationController::class, 'destroy']);

//Payment
Route::get('/payment/list', [PaymentController::class, 'index']);
Route::get('/payment/store', [PaymentController::class, 'store']);
Route::get('/payment/update/{id}', [PaymentController::class, 'edit']);
Route::get('/payment/delete/{id}', [PaymentController::class, 'destroy']);

//Product
Route::get('/product/list', [ProductController::class, 'index']);
Route::get('/product/store', [ProductController::class, 'store']);
Route::get('/product/update/{id}', [ProductController::class, 'edit']);
Route::get('/product/delete/{id}', [ProductController::class, 'destroy']);

//Staff
Route::get('/staff/list', [StaffController::class, 'index']);
Route::get('/staff/store', [StaffController::class, 'store']);
Route::get('/staff/update/{id}', [StaffController::class, 'edit']);
Route::get('/staff/delete/{id}', [StaffController::class, 'destroy']);

//Task
Route::get('/task/list', [TaskController::class, 'index']);
Route::get('/task/store', [TaskController::class, 'store']);
Route::get('/task/update/{id}', [TaskController::class, 'edit']);
Route::get('/task/delete/{id}', [TaskController::class, 'destroy']);
