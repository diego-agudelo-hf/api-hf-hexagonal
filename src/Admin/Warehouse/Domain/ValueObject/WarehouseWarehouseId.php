<?php

namespace Src\Admin\Warehouse\Domain\ValueObject;

final class WarehouseWarehouseId
{
    private int $value;

    public function __construct(int $value)
    {
        $this->value =  $value;
    }

    public function value(): int
    {
        return $this->value;
    }
}
