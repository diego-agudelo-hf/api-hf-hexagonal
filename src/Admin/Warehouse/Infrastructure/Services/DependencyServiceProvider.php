<?php

namespace Src\Admin\Warehouse\Infrastructure\Services;

use Illuminate\Support\ServiceProvider;


final class DependencyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when(\Src\Admin\Warehouse\Aplication\Find\WarehouseFindAllUseCase::class)
            ->needs(\Src\Admin\Warehouse\Domain\Contracts\WarehouseRepositoryContract::class)
            ->give(\Src\Admin\Warehouse\Infrastructure\Repositories\Eloquent\WarehouseRepository::class);
    }
}
