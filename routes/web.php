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






//Client Side Routes
//client
Route::view('index2','main-web.index3');
// Pasing the Adons item data and geting the product details view
//Geting the child adons

//Geting the child adons of the adon items within adon item table

Route::view('/user-account','main-web.user-account');
Route::view('/user-register','main-web.user-register');
Route::view('/user-login','main-web.user-login');


//main-pages

//Main Website Page
Route::get('/{sub_category_id?}',[DoorShopMainPageController::class,'index'])->name('doorShop');
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
Route::post('/user-wishlist/{id}',[WishListController::class,'addToWishlist'])->name('addToWishlist');


// user review route
Route::post('/review',[ReviewController::class,'addReview'])->name('addReview');
// Geting adons


// Product Cart
Route::post('user/add-to-cart/{product_id}',[CartController::class,'addToCart'])->name('add-to-cart');
// Product Cart Review
Route::group(['middleware'=>['user']], function() {
    Route::get('user/product-cart/', [CartController::class, 'reviewCart'])->name('review.cart');
});

// Deleting Product from the view
Route::delete('user/cart/delete/{id}',[CartController::class,'deleteItem'])->name('delete.cart');
