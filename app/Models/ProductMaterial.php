<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductMaterial extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'product_id', 
        'material_id',
    ];
}
