<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdonsModel extends Model
{
    use HasFactory;

    protected $table='product_adons';
    protected $primaryKey='adon_id';
    public $timestamps=true;

    public function adonItems(){
       return $this->hasMany(AdonItemModel::class,'adon_id','adon_id');
    }
}
