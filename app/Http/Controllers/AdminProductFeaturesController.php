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
        $product_feature->product_feature_price = $request->input('txtProductPrice');
        $product_feature->product_feature_details = $request->input('txtProductFeatureDetails');
        $feature_image=$request->file('fulProductFeatureImage');
        $feature_image_name=$feature_image->getClientOriginalName();
        $feature_image_folder='/public/img/';
        $feature_image_path='/storage/img/'. $feature_image_name;
        $feature_image->storeAs($feature_image_folder,$feature_image_name);
        $product_feature->product_feature_image=$feature_image_path;

        $product_feature->save();
        $product_feature->save();
        return redirect()->route('index');
    }
public function editProductFeature($id){
        $product_feature=ProductFeaturesModel::find($id);

        return view('admin.edit-product-feature',compact('product_feature'));
}
    public function updateProductFeature(Request $request,$id){
        $product_feature=ProductFeaturesModel::find($id);
        $product_feature->product_feature_parent_name = $request->input('ddlCategoryFeature');
        $product_feature->product_feature_name = $request->input('txtProductFeatureName');
        $product_feature->product_feature_title = $request->input('txtProductFeatureTitle');
        $product_feature->product_feature_price = $request->input('txtProductPrice');
        $product_feature->product_feature_details = $request->input('txtProductFeatureDetails');

        //uploading the image
        $feature_image=$request->file('fulProductFeatureImage');

        $feature_image_name=$feature_image->getClientOriginalName();
        $feature_image_folder='/public/img/';
        $feature_image_path='/storage/img/'. $feature_image_name;
        $feature_image->storeAs($feature_image_folder,$feature_image_name);
        $product_feature->product_feature_image=$feature_image_path;

        $product_feature->save();

        return redirect()->route('index');

    }
    public  function deleteFeature($id){
        $feature=ProductFeaturesModel::find($id);
        $feature->delete();
        return redirect()->back();


    }
}
