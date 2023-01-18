<?php

use App\Http\Controllers\PerpusController;
use Illuminate\Support\Facades\Route;
use App\Models\Data;
use App\Models\Perpus;
use App\Models\User;

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
Route::get('/', [PerpusController::class, 'index'])->name('index');

Route::get('/register', [PerpusController::class, 'register'])-> name('register');
Route::post('/register', [PerpusController::class, 'inputRegister'])-> name('register.post');

Route::get('/log', [PerpusController::class, 'login'])->name('login');
Route::post('/log', [PerpusController::class, 'auth'])->name('login.auth');

Route::get('/create', [PerpusController::class, 'create'])->name('create');
Route::get('/dash', [PerpusController::class, 'dashboard'])->name('dashboard.dashboard');
Route::get('/user', [PerpusController::class, 'user'])->name('user');

Route::get('/book', [PerpusController::class, 'book']);
Route::post('/book', [PerpusController::class, 'add'])->name('add');