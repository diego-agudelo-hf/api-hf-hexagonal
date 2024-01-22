<?php

namespace Src\Admin\Warehouse\Aplication\Find;


use Src\Admin\Warehouse\Domain\Contracts\WarehouseRepositoryContract;

final class WarehouseFindAllUseCase
{
    private $repository;
    public function __construct(WarehouseRepositoryContract $repository)
    {
        $this->repository = $repository;
    }


    public function __invoke(): array
    {
        return $this->repository->findAll();
    }
}
