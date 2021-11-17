<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TransferController;
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
    return view('welcome');
});

Route::get('/index', [PageController::class, 'index']);
Route::post('/verify-account', [TransferController::class, 'verifyAccount'])->name('verify-account');
Route::get('/banks', [TransferController::class, 'getbankInfo']);
Route::get('/create-recipient/{account_name}/{account_number}/{bank_code}', [TransferController::class, 'createRecipient'])->name('createRecipient');

Route::post('/transfer', [TransferController::class, 'transfer'])->name('transfer');
Route::post('/finalize-transfer', [TransferController::class, 'finalizeTransfer'])->name('finalizeTransfer');
