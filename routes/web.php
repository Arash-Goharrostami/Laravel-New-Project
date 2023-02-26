<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () { return view('welcome')});

Route::get("/orders", [OrderController::class  , "index" ])->name("index" );
Route::post("/order/create" , [OrderController::class, "create"])->name("search");
Route::get("/order/{id}" , [OrderController::class, "show"])->name("search");
Route::delete("/order/{id}" , [OrderController::class, "delete"])->name("search");
Route::put("/order/update/{id}" , [OrderController::class, "update"])->name("search");
Route::get("/order/info/{id}" , [OrderController::class, "info"])->name("search");

Route::post("/product/search" , [ProductController::class, "search"])->name("search");
Route::get("/product/{id}" , [ProductController::class, "showProduct"])->name("search");
Route::get("/product/update/{id}" , [ProductController::class, "showProductUpdate"])->name("search");
Route::post("/product/create" , [ProductController::class, "create"])->name("search");
