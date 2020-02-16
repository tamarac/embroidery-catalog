<?php

namespace App\Services\Product;

use App\Models\Material;

class MaterialService
{
    protected $material;

    public function __construct(Material $material)
    {
        $this->material = $material;

        return $this;
    }

    public function get()
    {
        return $this->material->all();
    }
}