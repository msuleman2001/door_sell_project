<?php

namespace App\Models;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table='products';
    protected $primaryKey='product_id';
    public $incrementing=true;
    protected $keyType='int';
    public $timestamps=true;
    protected $fillable = ['product_id', 'product_title', 'category_id', 'product_price', 'product_details', 'product_sku'];
public  function productCategory(){
    return $this->belongsTo(ProductCategoryModel::class);
}
    //one to many rellationship between Product and review
    public function reviews()
    {
        return $this->hasMany(ReviewModel::class,'product_id','product_id');
    }

}
