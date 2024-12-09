<?php
use App\Http\Controllers\NHT_sessionController;
use App\Http\Controllers\NHT_accountController;
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

//test session
Route::get('/NHTsession/getsession', [NHT_sessionController::class,"NHTgetsession"])->name('NHTgetsession');
Route::get('/NHTsession/storesession', [NHT_sessionController::class,"NHTstoresession"])->name('NHTstoresession');
Route::get('/NHTsession/deletesession', [NHT_sessionController::class,"NHTdeletesession"])->name('NHTdeletesession');

//account 
Route::get('/NHTaccount/login', [NHT_accountController::class,"NHTlogin"])->name('account.NHTlogin');