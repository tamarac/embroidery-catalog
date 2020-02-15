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

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function productMaterials()
    {
        return $this->belongsToMany(
            Material::class,
            'product_materials',
            'product_id',
            'material_id'
        );
    }
}
