<?php

use App\Http\Middleware\AdminAuth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResturentInfoController;

use App\Http\Controllers\DeliveryLocationController;
use App\Http\Controllers\BranchController;


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
    return view('resturant.home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::view("/dashboard" , "dashboard")->middleware(['auth', 'auth.admin']);
//resturant
Route::view("/app","resturant.app");
// Route::view("/home","resturant.home");
// comment

Route::resource("/category" ,CategoryController::class)->middleware(['auth', 'auth.admin']); 
Route::resource("/item" ,ItemController::class)->middleware(['auth', 'auth.admin']); 
Route::prefix("/user")->middleware(['auth', 'auth.admin'])->group(function(){
    Route::get("/" ,[UserController::class , "index"])->name("user.index");
    Route::post("/" ,[UserController::class , "store"])->name("user.store");
    Route::get("/create" ,[UserController::class , "create"])->name("user.create");
    // Route::
});

// Route::view("/item","resturant.controladmin.item");
// Route::view("/item_img","resturant.controladmin.item_img");
Route::view("/order","resturant.controladmin.order");
Route::view("/order_item","resturant.controladmin.order_item");
// Route::view("/location","resturant.controladmin.location");
Route::view("/history","resturant.footer.ourhistory");
Route::view("/covid","resturant.covid-19");
Route::view("/admin","resturant.admin2")->middleware(['auth', 'auth.admin']);

Route::resource("/info",ResturentInfoController::class)->middleware(['auth', 'auth.admin']);
// Route::resource("/order",OrderController::class)->middleware(['auth', 'auth.admin']);
Route::resource("/delivery",DeliveryLocationController::class)->middleware(['auth', 'auth.admin']);
Route::resource("/branch",BranchController::class)->middleware(['auth', 'auth.admin']);


Route::view("/bag" ,"bag")->name("bag");
// Route::get("/bag/add/{product}" ,[BagController::class ,"add"])->name("bag.add");
// Route::get("/bag/remove/{product}" ,[BagController::class ,"remove"])->name("bag.remove");
Route::view("/beverages","resturant.site.Beverages");
Route::get("/item/category/{category}",[ItemController::class,"findByCatId"]);
