<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\TicketsController;

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

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('/events', EventsController::class);
    Route::put('/events/{event}/buy-ticket', [EventsController::class, 'buyTicket']);
    Route::get('/tickets/{ticket}/use', [TicketsController::class, 'use']);
    Route::put('/tickets/{ticket}/refund', [TicketsController::class, 'refund']);
});
Route::view('/register', 'auth.register');
Route::view('/login', 'auth.login');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::delete('/logout', [AuthController::class, 'logout']);