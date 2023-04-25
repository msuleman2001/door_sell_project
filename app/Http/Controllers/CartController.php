<?php

namespace App\Http\Controllers;
use App\Models\CartModel;
use App\Models\ProductModel;
use App\Models\ProductCategoryModel;


use Illuminate\Http\Request;

class CartController extends Controller
{
public function  addToCart(Request $request,$id){

    $selectedAddons = json_decode($request->input('selectedAdons'), true);

    //converting to json again
    $selectedAddonsJson = json_encode($selectedAddons);

    // Get the total price from the AJAX request
    $totalPrice = $request->input('total_price');
    // Get the product ID from the AJAX request
    $productId = $id;

    $productQuantity=$request->input('quantity');

    // Create a new cart item with the given details
    $cart = new CartModel();
    $cart->product_id = $productId;
    $cart->cart_quantity=$productQuantity;
    $cart->product_adons_json =  $selectedAddonsJson;
    $cart->cart_price = $totalPrice;

    // Save the cart item to the database
    $cart->save();

    return redirect()->to('user/product-cart/');

}
public function reviewCart(){
    $cart_items = CartModel::join('products', 'cart.product_id', '=', 'products.product_id')
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
}
