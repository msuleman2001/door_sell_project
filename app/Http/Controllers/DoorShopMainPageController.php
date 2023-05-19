<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\ProductCategoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class DoorShopMainPageController extends Controller {

    //index page
    public function index($parent_category_id = 0){
        $categories = ProductCategoryModel::getCategoriesAndSubCategories();

        if ($parent_category_id == 0){
            if (count($categories) > 0)
                $sub_categories = $categories[0]['sub_categories'];
            else
                $sub_categories = [];
            $products = [];
            return view('main-web.main',compact('categories', 'sub_categories', 'products'));
        }

        $sub_categories = ProductCategoryModel::getSubCategories($parent_category_id);
        if (count($sub_categories) == 0){
            $products = ProductModel::where('category_id', $parent_category_id)->get();
            $sub_categories = [];
            return view('main-web.main',compact('categories', 'sub_categories', 'products'));
        }
        $products = [];
        return view('main-web.main',compact('categories', 'sub_categories', 'products'));
    }

    //getting categories and sub categories
}
