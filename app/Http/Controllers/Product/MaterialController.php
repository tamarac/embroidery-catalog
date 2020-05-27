<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateMaterial;
use App\Http\Requests\UpdateMaterial;
use App\Services\Material\MaterialService;

class MaterialController extends Controller
{
    public function get()
    {
        return app(MaterialService::class)->get();
    }

    public function create(CreateMaterial $request)
    {
        return app(MaterialService::class)->create($request->validated());
    }

    public function update(UpdateMaterial $request)
    {
        return app(MaterialService::class)->update($request->validated());
    }

    public function delete(int $id)
    {
        return app(MaterialService::class)->delete($id);
    }
}
