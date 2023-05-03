<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\ProductCategoryModel;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function passData(){
        $categories = ProductCategoryModel::all();
        return view('admin.product-category-list',compact('categories'));
    }

    //passing categories data to add category view
    public  function categoryList(){
        $categories=ProductCategoryModel::all();
        return view('admin.add-product-category',compact('categories'));
    }
    public function addCategory(Request $request)
    {
        // initialize the instance of ProductCategoryModel
        $categories = ProductCategoryModel::all();

        $cat_name = $request->input('category_name');
        $cat_detail=$request->input('category_details');
        $parent_category_id = $request->input('parent_category',0);
        $category_image=$request->file('category_image');
        $category_image_name=$category_image->getClientOriginalName();
        $category_image_folder='/public/img/';
        $category_image_path='/storage/img/'.$category_image_name;
        $category_image->storeAs($category_image_folder,$category_image_name);
        $cat_image=$category_image_path;


        //storing data in product_category table
        DB::table('product_category')->insert([
           'category_name'=>$cat_name,
           'parent_category'=>$parent_category_id,
            'category_image'=>$cat_image,
            'created_at'=>now(),
            'updated_at'=>now(),
            'category_details'=>$cat_detail
        ]);

// Redirect back to the product-category page with a success message and the categories data
        return redirect()->route('addCategory')
            ->with('success', 'Category saved successfully.')
            ->with('categories', $categories);
            // Category saved successfully

    }


    //Updating the Product Category Data


    //geting data related to specific id on edit product view
    public function editCatData($category_id){
        $category=ProductCategoryModel::find($category_id);
        return view('admin.edit-product-category',compact('category'));
    }
//updating the category data related to specific id\
    public function updateCatData(Request $request, $category_id){
        $category=ProductCategoryModel::find($category_id);
        $category->category_name=$request->input('category_name');
        $category->category_details=$request->input('category_details');

            // Get the new image file
            $category_image=$request->file('category_image');
            //uploading image
            $category_image_name=$category_image->getClientOriginalName();
            $category_image_folder='/public/img/';
            $category_image_path='/storage/img/'.$category_image_name;
            $category_image->storeAs($category_image_folder,$category_image_name);
            $category->category_image=$category_image_path;
        $category->save();

        return redirect('/Admin/add-category');
    }
    //deleting the category data

    public function deleteCategory( $id){
        $category=ProductCategoryModel::find($id);
        $category->delete();
        return redirect()->back();
    }
}
