<?php

namespace Zyrn\DockrPkg\Console\Commands;

use Illuminate\Console\Command;

class CheckDockerCommand extends Command
{
    protected $signature = 'dockr:check';

    protected $description = 'Check if Docker is installed and running';

    public function handle()
    {
        $this->info('Running check_docker.php script...');
        passthru('php ' . base_path('vendor/zyrn/dockr-pkg/check_docker.php'));
    }
}
