<?php

namespace Src\Admin\Warehouse\Domain;

use Src\Admin\Warehouse\Domain\ValueObject\{WarehouseWarehouseId, WarehouseWarehouseName, WarehouseWarehouseStatus, WarehouseWarehouseStatusId};

final class Warehouse
{

    private $warehouseWarehouseName;
    private $warehouseWarehouseId;
    private $warehouseWarehouseStatus;
    private $warehouseWarehouseStatusId;

    public function __construct(
        WarehouseWarehouseName $warehouseWarehouseName,
        WarehouseWarehouseId $warehouseWarehouseId,
        WarehouseWarehouseStatus $warehouseWarehouseStatus,
        WarehouseWarehouseStatusId $warehouseWarehouseStatusId,
    ) {

        $this->warehouseWarehouseName = $warehouseWarehouseName;
        $this->warehouseWarehouseId = $warehouseWarehouseId;
        $this->warehouseWarehouseStatus = $warehouseWarehouseStatus;
        $this->warehouseWarehouseStatusId = $warehouseWarehouseStatusId;
    }

    public function warehouseWarehouseName(): WarehouseWarehouseName
    {
        return  $this->warehouseWarehouseName;
    }
    public function warehouseWarehouseId(): WarehouseWarehouseId
    {
        return  $this->warehouseWarehouseId;
    }
    public function warehouseWarehouseStatus(): WarehouseWarehouseStatus
    {
        return  $this->warehouseWarehouseStatus;
    }
    public function warehouseWarehouseStatusId(): WarehouseWarehouseStatusId
    {
        return  $this->warehouseWarehouseStatusId;
    }
}
