<?php

namespace Src\Admin\Warehouse\Domain\ValueObject;

final class WarehouseWarehouseStatus
{
    private string $value;

    public function __construct(string $value)
    {
        $this->value =  $value;
    }

    public function value(): string
    {
        return $this->value;
    }
}
