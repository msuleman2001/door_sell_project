<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class ColorsModel extends Model
{
    use HasFactory;
    protected $table='colours';
    protected $primaryKey='colour_id';
    public $incrementing=true;
    public $timestamps=true;

// Many to one relationship between colors and color type
    public function colorType()
    {
        return $this->belongsTo(ColorTypeModel::class);
    }


}
