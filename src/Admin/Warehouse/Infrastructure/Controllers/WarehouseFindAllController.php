<?php

namespace Src\Admin\Warehouse\Infrastructure\Controllers;

use Src\Admin\Warehouse\Aplication\Find\WarehouseFindAllUseCase;

final class WarehouseFindAllController
{
    private WarehouseFindAllUseCase $findAllUseCase;

    public function __construct(WarehouseFindAllUseCase $findAllUseCase)
    {
        $this->findAllUseCase = $findAllUseCase;
    }

    public function __invoke():array
    {
        return $this->findAllUseCase->__invoke();
    }
}
