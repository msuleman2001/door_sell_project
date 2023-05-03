<?php

namespace App\Http\Controllers;
use App\Models\WishlistModel;

use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function showWishList(){
        $wish_list=WishlistModel::join('products', 'wishlist.product_id', '=', 'products.product_id')
            ->join('users', 'wishlist.user_id', '=', 'users.user_id')
            ->select('wishlist.*', 'products.product_title', 'product_front_image', 'users.user_name')
            ->get();
        return view('admin.wishlist',compact('wish_list'));
    }
    public function addToWishlist(Request $request,$id){
        if(!session('user')){
            return redirect()->back()->withErrors(['login'=>'You must login first']);
        }

        $user_id=session('user')->user_id;
        $product_id=$id;

        $wishlist=new WishlistModel();
        $wishlist->product_id=$product_id;
        $wishlist->user_id=$user_id;
        $wishlist->save();

        return redirect()->back()->with('wishlist','Added To Wishlist');

    }
}
