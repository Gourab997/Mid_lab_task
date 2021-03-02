<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DynamicPDFController;

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

Route::get("admin",[AdminController::class,'index']);
Route::post("admin", [AdminController::class,'verify']);

Route::get("sales",[SalesController::class,'index']);
Route::post("sales", [SalesController::class,'verify']);
Route::get("system/sales/physical_store",[SalesController::class,'physical_store']);
Route::get("system/sales/physical_store/sales_log",[SalesController::class,'sales_log']);
Route::get("system/sales/social_media",[SalesController::class,'social_media']);
Route::get("system/sales/ecommerce",[SalesController::class,'ecommerce']);
Route::get("pdf",[DynamicPDFController::class,'index']);

});





