<?php

namespace Modules\User\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Route::middleware(['web'])
            ->group(__DIR__ . '/../../routes/admin.php');

        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');

        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'user');

        $this->registerHelpers();

    }

    public function registerHelpers()
    {
        if (file_exists($file = __DIR__ . '/../Helper.php')) {
            require $file;
        }
    }
}
