<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductFeaturesModel extends Model
{
    use HasFactory;
    protected $table='product_features';
    protected $primaryKey='product_feature_id';
    public $incrementing=true;
    public $timestamps=true;
    protected $fillable = ['product_feature_id', 'product_feature_parent_name', 'product_feature_name', 'product_feature_title', 'product_feature_image', 'product_feature_price', 'product_feature_details', 'created_by_id', 'created_date_time', 'last_updated_by_id', 'last_updated_date_time', 'product_feature_remarks'];

    public function getProductFeatureByName($product_feature_name){
        return ProductFeatures::where('product_feature_name', '=', $product_feature_name)->get();
    }
}