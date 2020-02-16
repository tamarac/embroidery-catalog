<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Services\Product\MaterialService;

class MaterialController extends Controller
{
    public function get()
    {
        return app(MaterialService::class)->get();
    }
}
