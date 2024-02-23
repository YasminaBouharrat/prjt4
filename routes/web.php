<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegisterClController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\userController;
use App\Http\Controllers\LoginCLController;
use App\Http\Controllers\PdfController;


Route::get("/",[RegisterController::class,"index"]);
Route::get("/register", [RegisterController::class, "show"])->name('personne.register');
Route::post("/register", [RegisterController::class, "register"]);
Route::get("/login", [LoginController::class, "show"])->name("personne.show");
Route::post("/login", [LoginController::class, "login"])->name("personne.login");
Route::get("/login/logout", [LoginController::class, "logout"])->name("personne.logout");



Route::put('/login/admin/update/{id}', [AdminController::class, "update"])->name('admin.update');
Route::get('/login/admin', [AdminController::class, "index"])->name('admin');
Route::get('/login/admin/create', [AdminController::class, "create"])->name('admin.create');
Route::get('/login/admin/{id}', [AdminController::class, "show"])->name('admin.show');
Route::delete('/login/admin/destroy/{id}', [AdminController::class, "destroy"])->name('admin.destroy');
Route::get('/login/admin/edit/{id}', [AdminController::class, "edit"])->name('admin.edit');
Route::post('/login/admin/store', [AdminController::class, "store"])->name('admin.store');




Route::get("/produits",[userController::class,"show"])->name('produits');
Route::get("/produits/cart",[userController::class,"cart"])->name('produits.cart');
Route::get('produits/export/', [AdminController::class, 'export'])->name('produits.export');
Route::post('produits/import/', [AdminController::class, 'import'])->name('produits.import');


Route::delete('/deletefromcart/{id}', [userController::class,'deletefromcart'])->name('produits.deletefromcart');
Route::delete('/deleteallfromcart', [userController::class,'deleteallfromcart'])->name('produits.deleteallfromcart');
Route::post('/addtocart/{produit}', [userController::class,'addtocart'])->name('produits.addtocart');
Route::post('/addtocart/download/{id}', [PdfController::class,'download'])->name('produits.pdf');
Route::post('/commande/add/{id}', [userController::class, 'addProduitToCommande'])->name('produits.add');
Route::get('/produits/search', [userController::class, 'search'])->name('produits.search');


Route::get("/produits/register",[RegisterClController::class,"index"]);
Route::get("/produits/register", [RegisterClController::class, "show"])->name('client.register');
Route::post("/produits/register", [RegisterClController::class, "register"]); 

Route::get("/produits/register/login", [LoginCLController::class, "show"])->name("client.show");
Route::post("/produits/register/login", [LoginCLController::class, "login"])->name("client.login");
Route::get("/produits/register/logout", [LoginCLController::class, "logout"])->name("client.logout");

