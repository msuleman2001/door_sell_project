<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewModel extends Model
{
    use HasFactory;
    protected $table='reviews';
    protected $primaryKey='review_id';


    public function products(){
        $this->belongsTo(ProductModel::class,'product_id','review_id');
    }
}
