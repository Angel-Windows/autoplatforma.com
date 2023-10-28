<?php
namespace App\Providers;
use App\Repositories\BlogRepository;
use App\Repositories\CatalogRepository;
use App\Repositories\Interfaces\BlogRepositoryInterface;
use App\Repositories\Interfaces\CatalogRepositoryInterface;
use Illuminate\Support\ServiceProvider;
class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            BlogRepositoryInterface::class,
            BlogRepository::class,


        );
        $this->app->bind(
            CatalogRepositoryInterface::class,
            CatalogRepository::class,
        );
    }
}
