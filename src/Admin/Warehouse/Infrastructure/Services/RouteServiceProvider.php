<?php

namespace Src\Admin\Warehouse\Infrastructure\Services;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use illuminate\Support\Facades\Route;

final class RouteServiceProvider extends ServiceProvider
{

    protected $nameSpace = "Src\Admin\Warehouse\Infrastructure\Controllers";

    public function boot()
    {
        parent::boot();
    }

    public function map()
    {
        $this->mapRoutes();
    }

    public function mapRoutes()
    {
        Route::prefix("api/warehouse")
        ->namespace($this->nameSpace)
        ->group(base_path('Src/Admin/Warehouse/Infrastructure/Routes/Api.php'));
    }
}
