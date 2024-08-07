
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
        // Register commands here
        $this->commands([
            \Zyrn\DockrPkg\Console\Commands\StartDockerCommand::class,
            \Zyrn\DockrPkg\Console\Commands\CheckDockerCommand::class,
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
            $this->call('dockr:check'); // This needs to be a valid Artisan command
            $this->call('dockr:start'); // This needs to be a valid Artisan command
        }
    }
}
