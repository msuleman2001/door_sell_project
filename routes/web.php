<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DoorShopMainPageController;
use App\Http\Controllers\ColorTypeController;

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
//Admin Dashboard Routes

Route::view('/Admin/dashboard','dashboard')->name('AdminDashboard');
Route::view('/register','register');

//Product Categories Route

Route::get('/Admin/add-category',[ProductCategoryController::class,'passData'])->name('addCategory');
Route::view('/Admin/adding-category','add-product-category')->name('addingCategory');
Route::post('/Admin/added-category',[ProductCategoryController::class,'addCategory'])->name('addedCategory');

//Products Routes

Route::get('/Admin/add-product',[ProductController::class,'passData'])->name('addProduct');
//pasing categories data in order to show in drop down
Route::get('/Admin/adding-product',[ProductController::class,'passCatData'])->name('addingProduct');
Route::post('/Admin/added-product',[ProductController::class,'addProduct'])->name('addedProduct');

//Color Type Routes
Route::get('/Admin/add-color-type',[ColorTypeController::class, 'passData'])->name('addColourType');
Route::view('/Admin/adding-color-type','add-product-color-type')->name('addingColourType');
Route::post('/Admin/added-color-type',[ColorTypeController::class,'addType'])->name('addedColourType');

//Registeration and Login route for Client

Route::post('/register', [AuthController::class, 'register']);
Route::view('/login','login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout',[AuthController::class, 'logout']);

//Registration and Login Routes for Admin
Route::view('/Admin/admin-register','admin-register');
Route::post('/Admin/admin-register',[AdminAuthController::class, 'adminRegister'])->name('adminRegister');
Route::view('Admin/admin-login','admin-login');
Route::post('Admin/admin-login',[AdminAuthController::class,'adminLogin'])->name('adminLogin');
//Client Side Routes
//client
Route::view('/user-account','main-web.user-account');
Route::view('/user-register','main-web.user-register');
Route::view('/user-login','main-web.user-login');


//main-pages
Route::get('/door_shop',[DoorShopMainPageController::class,'passData'])->name('doorShop');
Route::view('/door_shop2','main-web.index-2');

//TopBar


//Home pages
Route::view('/home2','main-web.home2');
Route::view('/home3','main-web.home3');
Route::view('/home4','main-web.home4');
Route::view('/home5','main-web.home5');


//Blog
Route::view('/blog-list-sidebar-left','main-web.blog-list-sidebar-left');
Route::view('/blog-list-sidebar-left2','main-web.blog-list-sidebar-left2');
Route::view('/blog-list-sidebar-right','main-web.blog-list-sidebar-right');
Route::view('/blog-list-no-sidebar','main-web.blog-list-no-sidebar');
Route::view('/blog-grid-no-sidebar','main-web.blog-grid-no-sidebar');
Route::view('/blog-detail','main-web.blog-detail');


//Page
//Category Style
Route::view('/product-grid-sidebar-left','main-web.product-grid-sidebar-left');
Route::view('/product-grid-sidebar-right','main-web.product-grid-sidebar-right');
Route::view('/product-list-sidebar-left','main-web.product-list-sidebar-left');
Route::get('/product-details/{id}', [ProductController::class, 'show'])->name('product.detail');


//About Us
Route::view('/about-us','main-web.about-us');

//contact us
Route::view('/contact-us','main-web.contact');

//cart and checkout
Route::view('/product-cart','main-web.product-cart');
Route::view('/product-checkout','main-web.product-checkout');

//user wishlist
Route::view('/user-wishlist','main-web.user-wishlist');
