<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\SuthepController;
use App\Http\Controllers\KnowledgeController;
use App\Http\Controllers\StaffController;

// use App\Models\User;

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

//parameters
// Route::get('post/{slug}', [UserController::Class,'show'])->name('show');

Route::resource('content', ContentController::Class);

// Route::get('/admin', [AdminController::Class,'index'])->name('admin');

Route::get('/', [UserController::Class,'index'])->name('home');
Route::get('/suthep', [SuthepController::Class,'index'])->name('suthep');
Route::get('/knowledge', [KnowledgeController::Class,'index'])->name('knowledge');
Route::get('/staff', [StaffController::Class,'index'])->name('staff');