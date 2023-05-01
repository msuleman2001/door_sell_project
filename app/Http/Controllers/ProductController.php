<?php

namespace App\Http\Controllers;

use App\Models\AdonItemModel;
use App\Models\ProductCategoryModel;
use App\Models\ProductModel;
use App\Models\ReviewModel;
use App\Models\ColourTypeModel;
use App\Models\AdonsModel;
use App\Models\ProductFeaturesModel;

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
        $product_quantity = $request->input('product_quantity');
        
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

        return redirect()->route('addProduct');

    }

 //going to specific product detail page from the images
    public function show($id){
        //passing the adons data to the product-details view
            // The where() method takes two arguments: the name of the
        // column you want to search in, and the value you want to search for.
        //it will show the adon_items related to specific adon_value
        //get complete list of addons from database
        $addons = AdonsModel::where('parent_adon_id', '=', 0)->get();
        foreach ($addons as $addon){
            $child_addons = AdonsModel::where('parent_adon_id', '=', $addon->adon_id)->get();
            if (count($child_addons) > 0){
                foreach ($child_addons as $child_addon){
                    $addon_items = AdonItemModel::where('adon_id', '=', $child_addon->adon_id)->get();
                    $child_addon['addon_items'] = $addon_items;
                }    
                $addon['child_addons'] = $child_addons;
            } else {
                $addon_items = $addon_items = AdonItemModel::where('adon_id', '=', $addon->adon_id)->get();
                $addon['addon_items'] = $addon_items;
            }
        }

        $product_features = ProductFeaturesModel::all();

        $products=ProductModel::join('product_category', 'products.category_id', '=', 'product_category.category_id')
            ->select('products.*', 'product_category.category_name')
            ->get();
        $categories = ProductCategoryModel::getCategoriesAndSubCategories();

//        $parentColor = AdonsModel::where('adon_title', 'Color')->first();
////        retrieves all child adons where the "parent_adon_id" is equal to the "adon_id" of the parent adon
//        $childColor = AdonsModel::where('parent_adon_id', $parentColor->adon_id)->get();
//        $door_type_items = AdonsModel::where('adon_title', 'Door Type')->firstOrFail()->adonItems;
//        $dimention_items = AdonsModel::where('adon_title', 'Dimentions')->firstOrFail()->adonItems;
//        $swing_type_items = AdonsModel::where('adon_title', 'Swing Type')->firstOrFail()->adonItems;
//        $handle_type_items = AdonsModel::where('adon_title', 'Handle')->firstOrFail()->adonItems;
//        $architrave_design_items = AdonsModel::where('adon_title', 'Architrave')->firstOrFail()->adonItems;
//        $lock_type_items = AdonsModel::where('adon_title', 'Door Lock')->firstOrFail()->adonItems;
//        //Passing the specific product id and the reviews for that produ
        $product_details = ProductModel::find($id);
        $reviews = $product_details->reviews()->get();
        return view('main-web.product-detail', compact('addons','product_details','reviews','products','categories', 'product_features'));
//        return view('main-web.product-detail', compact('childColor',
//            'product_details', 'reviews', 'door_type_items', 'dimention_items', 'swing_type_items',
//            'handle_type_items', 'architrave_design_items', 'lock_type_items'));


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
