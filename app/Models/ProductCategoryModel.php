<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategoryModel extends Model
{
    use HasFactory;
    protected $table='product_category';
    protected $primaryKey="category_id";
    public  $incrementing=true;
    public $timestamps=true;
    //creating category list as an assocaiative array to pass in products
    //in order to show in dropdown list
    //categories id as key and name as value
    //the key will be passed in value"" attribute
    //and value will be passed in the dropdown
    public function categoriesList(){
        $categories=ProductCategoryModel::all();
        $categories_list=[];
        foreach ($categories as $category){
            $categories_list[$category->category_id]=$category->category_name;
        }
        return $categories_list;
    }

    public static function getParentCategories(){
        return ProductCategoryModel::where('parent_category', 0)->get();
    }

    public static function getSubCategories($parent_category_id){
        return ProductCategoryModel::where('parent_category', $parent_category_id)->get();
    }
    // One to many Relationship with Products
    public function products(){
        return $this->hasMany(ProductModel::class, 'category_id');
    }

    public static function getCategoriesAndSubCategories(){
        $categories = ProductCategoryModel::getParentCategories();

        foreach($categories as $parent_category)
            $parent_category['sub_categories'] = ProductCategoryModel::getSubCategories($parent_category->category_id);

        return $categories;
    }
}
