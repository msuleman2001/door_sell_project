<?php

namespace App\Http\Controllers;

use App\Models\ProductFeaturesModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductFeaturesController extends Controller
{
    public function index(){
        $product_features = ProductFeaturesModel::all();
        return view('admin.product-feature-list',compact('product_features'));
    }

    public function saveProductFeature(Request $request){
        
    }
}
