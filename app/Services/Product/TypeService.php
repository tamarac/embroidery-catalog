<?php

namespace App\Services\Product;

use App\Models\Type;

class TypeService
{
    protected $type;

    public function __construct(Type $type)
    {
        $this->type = $type;

        return $this;
    }

    public function get()
    {
        return $this->type->all();
    }
}