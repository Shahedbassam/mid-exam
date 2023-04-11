<?php

use Illuminate\Support\Facades\Route;
use App\Http\ExpenseController;
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

Route::get('/', [ExpenseController::class, 'index']);
Route::get('create', [ExpenseController::class, 'create']);
Route::POST('store', [ExpenseController::class, 'store']);
Route::POST('delete/{id}', [ExpenseController::class, 'delete']);
Route::POST('edit/{id}', [ExpenseController::class, 'edit']);
Route::PUT('update/{id}', [ExpenseController::class, 'update']);
