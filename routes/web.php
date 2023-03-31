<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DoorShopMainPageController;
use App\Http\Controllers\ColourTypeController;
use App\Http\Controllers\ColourController;

use App\Http\Controllers\AdminController;


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
Route::view('index2','main-web.index3');
//appling group middleware on the all admin routes to have only access if admin is login
Route::group(['middleware'=>['admin']], function(){
    //Admin Dashboard Routes
    Route::get('/Admin/dashboard',[AdminController::class,'index']);
//Route::view('/register','register');

//Product Categories Route

    //adding category
    Route::get('/Admin/add-category',[ProductCategoryController::class,'passData'])->name('addCategory');
    Route::view('/Admin/adding-category','admin.add-product-category')->name('addingCategory');
    Route::post('/Admin/added-category',[ProductCategoryController::class,'addCategory'])->name('addedCategory');

    //updating category data
    Route::get('/Admin/edit-category/{category_id}',[ProductCategoryController::class,'editCatData'])->name('updateCategory');
    Route::put('/Admin/update-cat/{category_id}',[ProductCategoryController::class, 'updateCatData'])->name('updatingCategory');

    //deleting the category data
    Route::delete('Admin/delete/category/{id}', [ProductCategoryController::class, 'deleteCategory'])->name('deleteCategory');

//Products Routes

    Route::get('/Admin/add-product',[ProductController::class,'passData'])->name('addProduct');
//pasing categories data in order to show in drop down
    Route::get('/Admin/adding-product',[ProductController::class,'passCatData'])->name('addingProduct');
    Route::post('/Admin/added-product',[ProductController::class,'addProduct'])->name('addedProduct');

    //updating the product data
    Route::get('/Admin/edit/product/{id}',[ProductController::class,'editProduct'])->name('updateProduct');
    Route::put('/Admin/update/product/{id}',[ProductController::class,'updateProduct'])->name('updatingProduct');

    //delete product data
    Route::delete('Admin/delete/product/{id}',[ProductController::class, 'deleteProduct'])->name('deleteProduct');


//Color Type Routes

    //adding the colour type
    Route::get('/Admin/add-colour-type',[ColourTypeController::class, 'passData'])->name('addColourType');
    Route::view('/Admin/adding-colour-type','admin.add-product-colour-type')->name('addingColourType');
    Route::post('Admin/adding-colour-type',[ColourTypeController::class,'addType'])->name('addedColourType');

    //updating the colour type

    Route::get('/Admin/edit/colour-type/{id}',[ColourTypeController::class,'editColourType'])->name('updateColourType');
    Route::put('Admin/update/colour-type/{id}',[ColourTypeController::class,'updateColourType'])->name('updatingColourType');

    //deleting colour type

    Route::delete('/Admin/delete/colour-type/{id}',[ColourTypeController::class,'deleteColourType'])->name('deleteColourType');

// Colours Routes

//adding colours

    Route::get('/Admin/add-colour',[ColourController::class, 'passData'])->name('addColour');
    Route::get('/Admin/adding-colour',[ColourController::class,'passColourType'])->name('addingColour');
    Route::post('/Admin/added-colour',[ColourController::class,'addColour'])->name('addedColour');


});






//Registeration for Client
//register
Route::get('/user/register', [AuthController::class, 'regView'])->name('userRegister');
Route::post('/user/register',[AuthController::class,'user_register'])->name('userRegistered');

//logout
Route::get('/logout',[AuthController::class, 'logout'])->name('Logout');

//Registration and Login Routes for Admin
Route::get('/Admin/register',[AuthController::class, 'adminRegView'])->name('adminRegister');
Route::post('Aadmin/register',[AuthController::class, 'admin_register'])->name('adminRegistered');

//login routes
//login
Route::get('/admin', [AuthController::class, 'logView'])->name('login');
Route::post('/login',[AuthController::class, 'login'])->name('loggedIn');



//Client Side Routes
//client
Route::view('/user-account','main-web.user-account');
Route::view('/user-register','main-web.user-register');
Route::view('/user-login','main-web.user-login');


//main-pages
Route::get('/',[DoorShopMainPageController::class,'passData'])->name('doorShop');
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
