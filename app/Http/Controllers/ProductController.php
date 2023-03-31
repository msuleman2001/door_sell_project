<?php

namespace App\Http\Controllers;

use App\Models\ProductCategoryModel;
use App\Models\ProductModel;
use App\Models\ColourTypeModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{




    //passing Categories datato show in dropdown when adding product
    //and passing the associative array of product category from product category model
    //passing the colour types data to show in checkboxes
    public function passCatData(){
        $categories=ProductCategoryModel::all();
        $colour_types=ColourTypeModel::all();
        $categories_list = (new ProductCategoryModel)->categoriesList();
        return view('admin.add-product',compact('categories','categories_list', 'colour_types'));

    }
    //passing the data of products and catrgories to prouct-list view
    public function passData(){
        //joining table to show the name of category
        $products=ProductModel::join('product_category', 'products.category_id', '=', 'product_category.category_id')
            ->select('products.*', 'product_category.category_name')
            ->get();
        $categories=ProductCategoryModel::all();
        return view('admin.product-list',compact('products','categories'));
    }
    //adding the products
    public function addProduct(Request $request)
    {
        //the number in qauntity fieldd will deide the number of total enteries of product
        $product_quantity = $request->input('product_quantity');
        for ($i = 0; $i < $product_quantity; $i++) {
            $product = new ProductModel();
            $product->product_title = $request->input('product_title');
            $product->category_id = $request->input('category_id');
            $product->product_price = $request->input('product_price');
            $product->product_details = $request->input('product_detail');
            $product->product_sku = $request->input('product_sku');

            // Upload image
            $front_image = $request->file('product_front_image');
            $back_image = $request->file('product_back_image');

            $front_image_name = $front_image->getClientOriginalName();
            $back_image_name = $back_image->getClientOriginalName();
            $image_folder = '/public/img/';
            $front_image_path = '/storage/img/'. $front_image_name;
            $back_image_path = '/storage/img/'. $back_image_name;
            $front_image->storeAs($image_folder,$front_image_name);
            $back_image->storeAs($image_folder,$back_image_name);
            $product->product_front_image = $front_image_path;
            $product->product_back_image = $back_image_path;
            $product->save();
            $product->colors()->sync($request->input('colour_type', []));

        }
        return redirect()->route('addProduct');

    }

 //going to specific product detail page from the images
    public function show($id){
        $product_details = ProductModel::find($id);
//        $products = ProductModel::all();
        return view('main-web.product-detail', compact('product_details'));
    }


    // updating the product data

    public function editProduct($id){
        //passing data related to specific product to edit product view

        $product=ProductModel::find($id);
$categories=ProductCategoryModel::all();
$colour_types=ColourTypeModel::all();
        return view('admin.edit-product',compact('product','categories','colour_types'));

    }
    public function updateProduct(Request $request, $id)
    {
        $product = ProductModel::find($id);

        if ($product) {
            $product->product_title = $request->input('product_title');
            $product->category_id = $request->input('category_id');
            $product->product_price = $request->input('product_price');
            $product->product_details = $request->input('product_detail');
            $product->product_sku = $request->input('product_sku');

            if ($request->hasFile('product_front_image')) {
                Storage::delete($product->product_front_image);
                $front_image = $request->file('product_front_image');
                $front_image_name = $front_image->getClientOriginalName();
                $image_folder = '/public/img/';
                $front_image_path = '/storage/img/' . $front_image_name;
                $front_image->storeAs($image_folder, $front_image_name);
                $product->product_front_image = $front_image_path;
            }

            // Check if back image file is uploaded
            if ($request->hasFile('product_back_image')) {
                // Delete old back image file
                Storage::delete($product->product_back_image);

                // Upload new back image file
                $back_image = $request->file('product_back_image');
                $back_image_name = $back_image->getClientOriginalName();
                $image_folder = '/public/img/';
                $back_image_path = '/storage/img/' . $back_image_name;
                $back_image->storeAs($image_folder, $back_image_name);
                $product->product_back_image = $back_image_path;
            }

            // Save updated product
            $product->save();

            // Sync product colors
            $product->colors()->sync($request->input('colour_type', []));

            return redirect('Admin/add-product');
        }


    }
    //deleting the product data
    public function deleteProduct($id){
        $product=ProductModel::find($id);

        $product->delete();

        return redirect()->back();
    }


}
