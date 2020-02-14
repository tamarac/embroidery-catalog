<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 
        'description',
        'type_id',
        'price',
        'cost_price',
    ];
}
