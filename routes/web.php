<?php


use App\Http\Controllers\profile;
use App\Http\Controllers\dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;

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

// Route::get('/', function () {
//     return view('welcome');
// })->middleware('auth');


Route::middleware('auth')->group(function(){
    Route::get('login',[AuthController::class,'login'])->name('login');
    Route::post('login',[AuthController::class,'authenticating']);
    Route::get('register',[AuthController::class,'register']);
    Route::post('register',[AuthController::class,'registerProcess']);
});




// Route::get('dashboard',[dashboard::class,'dashboard'])->middleware(['auth','only_admin']);
// Route::get('profile',[profile::class,'profile'])->middleware('auth');

Route::middleware('auth')->group(function(){
    Route::get('dashboard',[dashboard::class,'dashboard']);
    Route::get('profile',[profile::class,'profile']);
    Route::get('books',[BookController::class,'index']);

});



