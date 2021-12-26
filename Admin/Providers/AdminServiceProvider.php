<?php

namespace Admin\Providers;

use Inertia\Inertia;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(AuthServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerConfig();
        $this->registerViews();
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../Config/config.php' => config_path('admin.php'),
        ], 'config');

        $this->mergeConfigFrom(
            __DIR__.'/../Config/config.php',
            'admin'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $sourcePath = __DIR__.'/../Resources/views';

        $this->publishes([
            $sourcePath => resource_path('views/admin')
        ], ['views', 'admin-views']);

        $this->loadViewsFrom($sourcePath, 'admin');

        Blade::componentNamespace("Admin\\View\\Component", 'admin');
    }

}
