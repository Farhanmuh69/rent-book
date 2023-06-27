<?php


use App\Http\Controllers\profile;
use App\Http\Controllers\dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RentLogController;

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
})->middleware('auth');




Route::get('login',[AuthController::class,'login'])->name('login');
Route::post('login',[AuthController::class,'authenticating']);
Route::get('register',[AuthController::class,'register']);
Route::post('register',[AuthController::class,'registerProcess']);

Route::get('logout',[AuthController::class,'logout']);
Route::get('dashboard',[dashboard::class,'dashboard'])->middleware(['auth']);
Route::get('profile',[profile::class,'profile'])->middleware('auth');


Route::get('categories',[CategoryController::class,'categories']);
Route::get('category-add',[CategoryController::class,'add']);
Route::post('category-add',[CategoryController::class,'store']);
Route::get('category-edit/{post:slug}',[CategoryController::class,'edit']);
Route::put('category-edit/{post:slug}',[CategoryController::class,'update']);
Route::get('category-delete/{post:slug}',[CategoryController::class,'delete']);
Route::get('category-destroy/{post:slug}',[CategoryController::class,'destroy']);








Route::get('books',[BookController::class,'books']);
Route::get('book-add',[BookController::class,'add']);
Route::post('book-add',[BookController::class,'store']);
Route::get('book-edit/{slug}',[BookController::class,'edit']);
Route::post('book-edit/{slug}',[BookController::class,'update']);
Route::get('book-delete/{slug}',[BookController::class,'delete']);
Route::get('book-destroy/{slug}',[BookController::class,'destroy']);
Route::get('book-deleted',[BookController::class,'deletedBook']);
Route::get('book-restore/{slug}',[BookController::class,'restore']);




Route::get('users',[UserController::class,'index']);
Route::get('registered-users', [UserController::class,'registereduser']);
Route::get('user-detail/{slug}', [UserController::class,'show']);
Route::get('user-aprrove/{slug}', [UserController::class,'approve']);
Route::get('user-ban/{slug}', [UserController::class,'delete']);
Route::get('user-destroy/{slug}', [UserController::class,'destroy']);
Route::get('user-banned', [UserController::class,'bannedUser']);
Route::get('user-restore/{slug}', [UserController::class,'restore']);


Route::get('rent-logs',[RentLogController::class,'index']);







