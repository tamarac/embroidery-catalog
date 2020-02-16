<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Services\Product\TypeService;

class TypeController extends Controller
{
    public function get()
    {
        return app(TypeService::class)->get();
    }
}
