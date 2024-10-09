<?php

namespace App\Repositories;

interface StoreRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
}
