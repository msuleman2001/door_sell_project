<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdonItemModel extends Model
{
    use HasFactory;

    protected $table= 'product_adons_items';
    protected $primaryKey= 'adon_item_id';

    public function adon()
    {
        return $this->belongsTo(AdonsModel::class, 'adon_id');
    }
}
