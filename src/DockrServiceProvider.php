<?php

namespace Zyrn\DockrPkg;

use Illuminate\Support\ServiceProvider;

class DockrServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Register the console commands
        if ($this->app->runningInConsole()) {
            $this->commands([
                \Zyrn\DockrPkg\Console\Commands\CheckDockerCommand::class,
                \Zyrn\DockrPkg\Console\Commands\StartDockerCommand::class,
            ]);

            // Execute the commands if desired
            $this->call('dockr:check');
            $this->call('dockr:start');
        }
    }

    public function register()
    {
        //
    }
}
