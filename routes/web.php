<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

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
    return view('home');
});
Route::get("login",[LoginController::class,'index']);
  
    Route::post("login",[LoginController::class,'verify']);


Route::group(['middleware'=>'sess'],function () {
 
Route::get("home",[CustomerController::class,'index']);

    
Route::get("home",[CustomerController::class,'index']);
Route::get("home/userlist",[CustomerController::class,'userlist'])->name('home.userlist');

Route::get("home/create",[CustomerController::class,'create'])->name('home.create');
Route::post("home/create",[CustomerController::class,'store']);

Route::get("home/edit/{id}",[CustomerController::class,'edit'])->middleware('sess')->name('home.edit');
Route::post("home/edit/{id}",[CustomerController::class,'update']);


Route::get("home/delete/{id}",[CustomerController::class,'delete'])->name('home.delete');
Route::post("home/delete/{id}",[CustomerController::class,'destroy']);
Route::get("home/details/{id}",[CustomerController::class,'show']);

Route::get("logout",[LogoutController::class,'index']);
});


