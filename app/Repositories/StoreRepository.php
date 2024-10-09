<?php

namespace App\Repositories;

use App\Models\Store;

class StoreRepository implements StoreRepositoryInterface
{
    public function all()
    {
        return Store::all();
    }

    public function find($id)
    {
        return Store::findOrFail($id);
    }

    public function create(array $data)
    {
        return Store::create($data);
    }
}
