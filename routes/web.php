<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
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
    //Route::get('/login','LoginController@index' );
    Route::post("login",[LoginController::class,'verify']);


Route::group(['middleware'=>'sess'],function () {
 
Route::get("home",[HomeController::class,'index']);

    
Route::get("home",[HomeController::class,'index']);
Route::get("home/userlist",[HomeController::class,'userlist'])->name('home.userlist');

Route::get("home/create",[HomeController::class,'create'])->name('home.create');
Route::post("home/create",[HomeController::class,'store']);

Route::get("home/edit/{id}",[HomeController::class,'edit'])->middleware('sess')->name('home.edit');
Route::post("home/edit/{id}",[HomeController::class,'update']);


Route::get("home/delete/{id}",[HomeController::class,'delete'])->name('home.delete');
Route::post("home/delete/{id}",[HomeController::class,'destroy']);
Route::get("home/details/{id}",[HomeController::class,'show']);

Route::get("logout",[LogoutController::class,'index']);
});

//Auth::routes();

//^Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
