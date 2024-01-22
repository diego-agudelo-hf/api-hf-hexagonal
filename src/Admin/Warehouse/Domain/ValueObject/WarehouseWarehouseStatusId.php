<?php

namespace Src\Admin\Warehouse\Domain\ValueObject;

final class WarehouseWarehouseStatusId
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
