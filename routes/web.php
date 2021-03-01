<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
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
 
Route::get("customer",[CustomerController::class,'index']);

    
Route::get("customer",[CustomerController::class,'index']);
Route::get("customer/userlist",[CustomerController::class,'userlist'])->name('customer.userlist');

Route::get("customer/create",[CustomerController::class,'create'])->name('customer.create');
Route::post("customer/create",[CustomerController::class,'store']);

Route::get("customer/edit/{id}",[CustomerController::class,'edit'])->middleware('sess')->name('customer.edit');
Route::post("customer/edit/{id}",[CustomerController::class,'update']);


Route::get("customer/delete/{id}",[CustomerController::class,'delete'])->name('customer.delete');
Route::post("customer/delete/{id}",[CustomerController::class,'destroy']);
Route::get("customer/details/{id}",[CustomerController::class,'show']);

Route::get("logout",[LogoutController::class,'index']);
});

Route::get("admin",[AdminController::class,'index']);
Route::post("admin", [AdminController::class,'verify']);




