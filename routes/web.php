<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DoorShopMainPageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WishListController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminProductFeaturesController;




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
//
//Auth routes
//register-client
Route::get('/user/register', [AuthController::class, 'regView'])->name('userRegister');
Route::post('/user/register',[AuthController::class,'user_register'])->name('userRegistered');

//login-client
Route::post('user/login',[AuthController::class, 'userLogin'])->name('userLogin');

//logout-client
Route::get('user/logout',[AuthController::class, 'userLogout'])->name('userLogout');

//Registration and Login Routes for Admin
//register-admin
Route::get('/Admin/register',[AuthController::class, 'adminRegView'])->name('adminRegister');
Route::post('Aadmin/register',[AuthController::class, 'admin_register'])->name('adminRegistered');

//login-admin
Route::get('/admin', [AuthController::class, 'logView'])->name('login');
Route::post('Admin/login',[AuthController::class, 'adminLogin'])->name('adminLogin');
//logout-admin
Route::get('Admin/logout',[AuthController::class, 'adminLogout'])->name('adminLogout');


//applying group middleware on the all admin routes to have only access if admin is login
Route::group(['middleware'=>['admin']], function(){
    //Admin Dashboard Routes
    Route::get('/Admin/dashboard',[AdminController::class,'index'])->name('dashboard');
//Route::view('/register','register');

//Product Categories Route

    //adding category
    Route::get('/Admin/add-category/{parent_category?}',[ProductCategoryController::class,'passData'])->name('addCategory');
    //showing categories in dropdown
    Route::get('/Admin/adding-category/{parent_category?}',[ProductCategoryController::class,'categoryList'])->name('addingCategory');
    Route::post('/Admin/added-category/{parent_category?}',[ProductCategoryController::class,'addCategory'])->name('addedCategory');

    //updating category data
    Route::get('/Admin/edit-category/{category_id}',[ProductCategoryController::class,'editCatData'])->name('updateCategory');
    Route::put('/Admin/update-cat/{category_id}',[ProductCategoryController::class, 'updateCatData'])->name('updatingCategory');

    //Showing Sub Category
    Route::get('/Admin/sub-category/{id}',[ProductCategoryController::class,'subCategory'])->name('subCategory');

    //deleting the category data
    Route::delete('/Admin/delete/category/{id}', [ProductCategoryController::class, 'deleteCategory'])->name('deleteCategory');

//Products Routes

    Route::get('/Admin/product-features',[AdminProductFeaturesController::class,'index'])->name('index');
    Route::post('/Admin/add-product-features',[AdminProductFeaturesController::class,'saveProductFeature'])->name('saveProductFeature');

    //updating the product features
    Route::get('Admin/edit-product-features/{id}',[AdminProductFeaturesController::class,'editProductFeature'])->name('editProductFeature');
    Route::post('/Admin/update-product-features/{id}',[AdminProductFeaturesController::class,'updateProductFeature'])->name('updateProductFeature');
//Deleting the product feature
    Route::delete('/Admin/delete-feature/{id}',[AdminProductFeaturesController::class,'deleteFeature'])->name('deleteProductFeature');
    //ADDING PRODUCTS
    Route::get('/Admin/add-product',[ProductController::class,'passData'])->name('addProduct');
    //pasing categories data in order to show in drop down
    Route::get('/Admin/adding-product',[ProductController::class,'passCatData'])->name('addingProduct');
    Route::post('/Admin/added-product',[ProductController::class,'addProduct'])->name('addedProduct');

    //updating the product data
    Route::get('/Admin/edit/product/{id}',[ProductController::class,'editProduct'])->name('updateProduct');
    Route::put('/Admin/update/product/{id}',[ProductController::class,'updateProduct'])->name('updatingProduct');

    //delete product data
    Route::delete('/Admin/delete/product/{id}',[ProductController::class, 'deleteProduct'])->name('deleteProduct');


//    Wishlist Routes
Route::get('/Admin/wish-list',[WishListController::class,'showWishList'])->name('wishList');

// Users Routes
    Route::get('/Admin/user-list',[AuthController::class,'showUsers'])->name('userList');
    // enabling disabling users
    Route::put('/Admin/user-list/{id}',[AuthController::class, 'toggle'])->name('toggle');




// Comments Routes
    Route::get('/Admin/comments-list',[CommentsController::class,'showComments'])->name('commentList');

    Route::get('/Admin/manage-cart',[CartController::class,'manageCart'])->name('manageCart');


});

//main-pages

//Main Website Page
Route::get('/{sub_category_id?}',[DoorShopMainPageController::class,'index'])->name('doorShop');
Route::view('/door_shop2','main-web.index-2');

//product details
Route::get('/product-details/{id}', [ProductController::class, 'show'])->name('product.detail');




//cart and checkout
Route::view('/product-cart','main-web.product-cart');
Route::view('/product-checkout','main-web.product-checkout');

//user wishlist
Route::post('/user-wishlist/{id}',[WishListController::class,'addToWishlist'])->name('addToWishlist');


// user review route
Route::post('/review',[ReviewController::class,'addReview'])->name('addReview');
// Geting adons


// Product Cart
Route::post('user/add-to-cart/{product_id}',[CartController::class,'addToCart'])->name('add-to-cart');
// Product Cart Review
Route::get('user/product-cart/', [CartController::class, 'reviewCart'])->name('review.cart');


// Deleting Product from the view
Route::delete('user/cart/delete/{id}',[CartController::class,'deleteItem'])->name('delete.cart');
