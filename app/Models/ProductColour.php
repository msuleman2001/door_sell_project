<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColour extends Model
{
    use HasFactory;
    protected $table='product_colours';
    protected $primaryKey='product_colours_id';
    public $incrementing=true;
    public $timestamps=true;
    protected $fillable = ['id', 'product_id', 'colour_type_id'];

}
