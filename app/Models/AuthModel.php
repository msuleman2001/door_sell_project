<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthModel extends Model
{
    use HasFactory;
    protected $table='users';
    protected $primaryKey='user_id';

    public $incrementing=true;
    public $timestamps=true;
}
