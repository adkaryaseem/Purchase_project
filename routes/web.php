<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EntryController;


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
});

Route::get("product/index",[ProductController::class,"index"])->name("product.index");
Route::get("product/create",[ProductController::class,"create"])->name("product.create");
Route::post("product/store",[ProductController::class,"store"])->name("product.store");
Route::get("product/edit/{id}",[ProductController::class,"edit"])->name("product.edit");
Route::post("product/update/{id}",[ProductController::class,"update"])->name("product.update");
Route::delete("product/delete/{id}",[ProductController::class,"delete"])->name("product.delete");



Route::get("entry/index",[EntryController::class,"index"])->name("entry.index");
Route::get("entry/create",[EntryController::class,"create"])->name("entry.create");
Route::post("entry/store",[EntryController::class,"store"])->name("entry.store");
Route::get("entry/edit/{id}",[EntryController::class,"edit"])->name("entry.edit");
Route::post("entry/update/{id}",[EntryController::class,"update"])->name("entry.update");
Route::delete("entry/delete/{id}",[EntryController::class,"delete"])->name("entry.delete");
Route::get("entry/search",[EntryController::class,"search"])->name("entry.search");
