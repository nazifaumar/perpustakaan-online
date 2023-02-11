<?php

use App\Http\Controllers\PerpusController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
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
Route::get('/logout', [PerpusController::class, 'logout']);

Route::group(['middleware' => 'mustLogin', 'prefix' => 'dashboard'], function(){ 
    
    Route::get('/', [PerpusController::class, 'dashboard'])->name('dashboard');
    Route::get('/user', [PerpusController::class, 'user'])->name('user');

        Route::get('/new-book', [PerpusController::class, 'newBook']);
        Route::get('/book', [PerpusController::class, 'book'])->name('book');
        Route::post('/book', [PerpusController::class, 'add'])->name('add');
        
    Route::get('/new-category', [PerpusController::class, 'newCategory']);
    Route::get('/category', [PerpusController::class, 'category'])->name('category');
    Route::post('/category', [PerpusController::class, 'addCategory'])->name('addCategory');
});
Route::get('/error', function () {
    return view('forbidenPage');
})->name('forbidenPage');
    