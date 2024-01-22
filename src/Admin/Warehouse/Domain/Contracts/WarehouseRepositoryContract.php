<?php

namespace  Src\Admin\Warehouse\Domain\Contracts;

use Src\Admin\Warehouse\Domain\Warehouse;

interface WarehouseRepositoryContract
{
    public function findAll(): array;
}
