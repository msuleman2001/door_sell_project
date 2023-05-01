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
        $product_feature = new ProductFeaturesModel();
        $product_feature->product_feature_parent_name = $request->input('ddlCategoryFeature');
        $product_feature->product_feature_name = $request->input('txtProductFeatureName');
        $product_feature->product_feature_title = $request->input('txtProductFeatureTitle');
        $product_feature->product_feature_image = $request->input('fulProductFeatureImage');
        $product_feature->product_feature_price = $request->input('txtProductPrice');
        $product_feature->product_feature_details = $request->input('txtProductFeatureDetails');

        $product_feature->save();
        return redirect()->route('index');
    }
public function editProductFeature($id){
        $product_feature=ProductFeaturesModel::find($id);

        return view('admin.edit-product-feature',compact('product_feature'));
}
    public function updateProductFeature(Request $request,$id){
        $feature=ProductFeaturesModel::find($id);

    }
}
