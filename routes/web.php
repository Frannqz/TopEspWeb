<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\GroceriesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ProductsController;
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
Route::get('/contact', [GroceriesController::class, 'contact'])->name("contact"); // name("contact")
Route::get('/product_details/{id}', [GroceriesController::class, 'product_details'])->name("details");
Route::resource('contact', ContactController::class);
Route::post('/product_details/{id}/comments', [CommentsController::class, 'store'])->name('comments.store');
Route::get('/admin/products', [ProductsController::class, 'index'])->name('admin.products.index');

Route::get('/admin/employees', [EmployeesController::class, 'employees'])->name('admin.employees.index');

// Route::resource('product_details', CommentsController::class);
// Route::post('/product_details/{id}', [CommentsController::class, 'store'])->name('product_details.store');
