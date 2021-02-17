<?php

namespace Vormkracht10\PackageTemplate\Providers;

use Illuminate\Support\ServiceProvider;

class PackageTemplateProvider extends ServiceProvider
{
    public function boot(): void
    {
        // $this->publishesConfigs();
        // $this->publishesMigrations();
        // $this->publishesViews();

        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'package-template');
    }

    public function register(): void
    {
        // $this->registerCommands();
        // $this->registerConfigs();
    }

    protected function registerCommands(): void
    {
        // $this->app->bind('command.package-template:something', PackageTemplateCommand::class);

        // $this->commands([
        //     'command.package-template:something',
        // ]);
    }

    protected function registerConfigs(): void
    {
        // $this->mergeConfigFrom(__DIR__.'/../config/package-template.php', 'package-template');
    }

    protected function publishesConfigs(): void
    {
        // $this->publishes([
        //     __DIR__.'/../config/package-template.php' => config_path('package-template.php'),
        // ], 'config');
    }

    protected function publishesMigrations(): void
    {
        // if (! class_exists('CreatePackageTemplateTable')) {
        //     $this->publishes([
        //         __DIR__.'/../database/migrations/create_package_template_table.php.stub' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_package_template_table.php'),
        //     ], 'migrations');
        // }
    }

    protected function publishesViews(): void
    {
        // $this->publishes([
        //     __DIR__.'/../resources/views' => resource_path('views/vendor/package-template'),
        // ], 'views');
    }
}
