<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\ProductCategoryModel;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function passData(){
        $categories = ProductCategoryModel::all();
        return view('product-category-list',compact('categories'));
    }
    public function addCategory(Request $request)
    {
        // initialize the instance of ProductCategoryModel
        $categories = ProductCategoryModel::all();

       $cat_name = $request->input('category_name');
       $cat_detail=$request->input('category_details');

        // check if the category already exists
//        $existingCategory = ProductCategoryModel::where('category_name', $request->input('category_name'))->first();
//        if ($existingCategory) {
//            return redirect()->back()->withErrors(['msg' => 'Category already exists']);
//        }
        //storing data in product_category table
        DB::table('product_category')->insert([
           'category_name'=>$cat_name,
            'created_at'=>now(),
            'updated_at'=>now(),
            'category_details'=>$cat_detail

        ]);

// Redirect back to the product-category page with a success message and the categories data
        return redirect()->route('addCategory')
            ->with('success', 'Category saved successfully.')
            ->with('categories', $categories);
            // Category saved successfully



//        passing the data to the product-categories view
    }

}
