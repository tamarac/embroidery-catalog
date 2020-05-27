<?php

namespace App\Services\Material;

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

    public function create(array $params): Material
    {
        return $this->material->create($params);
    }

    public function update(int $id, array $params): bool
    {
        $update = $this->material->findOrFail($id);

        return $update->update($params);
    }

    public function delete(int $id): bool
    {
        $delete = $this->material->findOrFail($id);

        return $delete->delete();
    }
}