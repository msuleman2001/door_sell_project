<?php

namespace App\Http\Controllers;

use App\Models\ProductCategoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class DoorShopMainPageController extends Controller
{
    public function passData(){
        $categories = ProductCategoryModel::with('products')->get();
        $products=ProductModel::all();
        return view('main-web.index',compact('categories','products'));
    }
}
