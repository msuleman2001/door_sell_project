<?php

namespace App\Http\Controllers;
use App\Models\WishlistModel;

use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function showWishList(){
        $wish_list=WishlistModel::all();
        return view('admin.wishlist',compact('wish_list'));
    }
}
