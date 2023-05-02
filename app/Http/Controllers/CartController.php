<?php

namespace App\Http\Controllers;
use App\Models\CartModel;
use App\Models\ProductModel;
use App\Models\ProductCategoryModel;
use App\Models\AuthModel;


use Illuminate\Http\Request;

class CartController extends Controller
{
public function  addToCart(Request $request, $product_id){

    $user_id = session('user')->user_id;
    $product_detail_json = $request->input('hidOrderDetailJSON');
    $quantity = $request->input('txtTotalDoors');
    $cart_price = $request->input('hidTotalPrice');
    $cart = new CartModel();
    $cart->user_id=$user_id;
    $cart->product_id = $product_id;
    $cart->product_detail_json =  $product_detail_json;
    $cart->cart_quantity=$quantity;
    $cart->cart_price = $cart_price;

    // Save the cart item to the database
    $cart->save();

    return redirect()->to('user/product-cart/');

}
    public function reviewCart(){
        $user_id = session('user')->user_id; // Get the current user ID from the session
        $cart_items = CartModel::join('products', 'cart.product_id', '=', 'products.product_id')
            ->where('cart.user_id', $user_id) // Only select cart items for the current user
            ->select('cart.*', 'products.product_title','product_price','product_front_image')
            ->get();
        $categories=ProductCategoryModel::all();
        return view('main-web.product-cart-review',compact('cart_items','categories'));
    }

//deleting the cart item
public function deleteItem($id){
    $cart_items=CartModel::find($id);

    $cart_items->delete();

    return redirect()->back();


}
//admin side
        public function manageCart(){
            $cart_items = CartModel::join('products', 'cart.product_id', '=', 'products.product_id')
                ->join('users', 'cart.user_id', '=', 'users.user_id')
                ->select('cart.*', 'products.product_title', 'product_price', 'product_front_image', 'users.user_name')
                ->get();
            return view('admin.cart-items-list',compact('cart_items'));
        }



}
