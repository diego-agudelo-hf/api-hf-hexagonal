<?php

namespace  Src\Admin\Warehouse\Infrastructure\Repositories\Eloquent;

use Src\Admin\Warehouse\Domain\Contracts\WarehouseRepositoryContract;

final class WarehouseRepository implements WarehouseRepositoryContract
{
    private Warehouse $model;
    public function __construct()
    {
        $this->model = new Warehouse();
    }
    public function findAll(): array
    {
        return $this->model->all()->toArray();
    }
}
