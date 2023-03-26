<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorTypeModel extends Model
{
    use HasFactory;
    protected $table='colour_type';
    protected $primaryKey='colour_type_id';
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=true;
    protected $fillable = ['colour_type_id', 'colour_type_name'];

    public function products()
    {
        return $this->belongsToMany(ProductModel::class, 'product_colours', 'colour_type_id', 'product_id');
    }


}
