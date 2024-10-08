<?php

namespace Zyrn\DockrPkg;

use Illuminate\Support\ServiceProvider;

class DockrServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        // Register commands and bindings here
        $this->commands([
            \Zyrn\DockrPkg\Console\Commands\StartDockerCommand::class,
            \Zyrn\DockrPkg\Console\Commands\CheckDockerCommand::class,
            \Zyrn\DockrPkg\Console\Commands\InstallPhpVersionCommand::class,
            
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Ensure this is correctly called
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/path/to/config.php' => config_path('dockr.php'),
            ], 'config');
        }
        
        // Run commands if desired (ensure these commands are defined)
        if ($this->app->runningInConsole()) {
            \Artisan::call('dockr:check'); // This needs to be a valid Artisan command
            \Artisan::call('dockr:start'); // This needs to be a valid Artisan command
        }
    }
}
