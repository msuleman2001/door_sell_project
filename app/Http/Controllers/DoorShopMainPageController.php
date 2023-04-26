<?php

namespace App\Http\Controllers;

use App\Models\ProductCategoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class DoorShopMainPageController extends Controller {
    public function index($parent_category_id = 0){
        $categories = $this->getCategoriesAndSubCategories();
        
        if ($parent_category_id == 0){
            $sub_categories = $categories[0]['sub_categories'];
            $products = [];
            return view('main-web.index',compact('categories', 'sub_categories', 'products'));
        }
        
        $sub_categories = ProductCategoryModel::getSubCategories($parent_category_id);
        if (count($sub_categories) == 0){
            $products = ProductModel::where('category_id', $parent_category_id)->get();
            return view('main-web.index',compact('categories', 'sub_categories', 'products'));
        }
        $products = [];
        return view('main-web.index',compact('categories', 'sub_categories', 'products'));
    }

    public function getCategoriesAndSubCategories(){
        $categories = ProductCategoryModel::getParentCategories();
        
        foreach($categories as $parent_category)
            $parent_category['sub_categories'] = ProductCategoryModel::getSubCategories($parent_category->category_id);
        
        return $categories;
    }
}