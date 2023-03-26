<?php

namespace App\Http\Controllers;

use App\Models\ProductCategoryModel;
use App\Models\ProductModel;
use App\Models\ColorTypeModel;

use Illuminate\Http\Request;

class ProductController extends Controller
{




    //passing Categories datato show in dropdown when adding product
    //and passing the associative array of product category from product category model
    //passing the colour types data to show in checkboxes
    public function passCatData(){
        $categories=ProductCategoryModel::all();
        $colour_types=ColorTypeModel::all();
        $categories_list = (new ProductCategoryModel)->categoriesList();
        return view('add-product',compact('categories','categories_list', 'colour_types'));

    }
    //passing the data of products and catrgories to prouct-list view
    public function passData(){
        //joining table to show the name of category
        $products=ProductModel::join('product_category', 'products.category_id', '=', 'product_category.category_id')
            ->select('products.*', 'product_category.category_name')
            ->get();
        $categories=ProductCategoryModel::all();
        return view('product-list',compact('products','categories'));
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
            $front_image_path = 'img/blog/' . $front_image_name;
            $back_image_path = 'img/blog/' . $back_image_name;
            $front_image->storeAs('img/blog/', $front_image_name);
            $back_image->storeAs('img/blog/', $back_image_name);
            $product->product_front_image = $front_image_path;
            $product->product_back_image = $back_image_path;
            $product->save();
            // Save related color types
//Laravel automatically maps the colour_type_id values from the $request object
// to the colour_type_id column in the product_colours table, and uses the product_id
// value of the current ProductModel instance as the value for the product_id column
// in the product_colours table.
            $product->colors()->sync($request->input('colour_type', []));
            dd($request->all());
        }
        return redirect()->route('addProduct');

    }
    public function show($id){
        $product_details = ProductModel::find($id);
//        $products = ProductModel::all();
        return view('main-web.product-detail', compact('product_details'));
    }

}
