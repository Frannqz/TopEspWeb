<?php

use App\Http\Controllers\GroceriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siteController; // Importa el controlador

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

// Route::get('/', [siteController::class, 'index'])->name("home"); // name("home") es el nombre de la ruta
// Route::get('/serv', [siteController::class, 'services'])->name("services");
// Route::get('/products', [siteController::class, 'products'])->name("products");
// Route::get('/contact', [siteController::class, 'contact'])->name("contact");


Route::get('/', [GroceriesController::class, 'index'])->name("index"); // name("index")
Route::get('/store/shop', [GroceriesController::class, 'shop'])->name("shop"); // name("shop")
Route::get('/register', [GroceriesController::class, 'register'])->name("register"); // name("register")
Route::get('/login', [GroceriesController::class, 'login'])->name("login"); // name("login")
