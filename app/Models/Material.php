<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 
        'description',
        'price',
    ];

    public function productMaterials()
    {
        return $this->belongsToMany(
            Product::class,
            'product_materials',
            'material_id',
            'product_id'
        );
    }
}
