<?php

namespace Zyrn\DockrPkg\Console\Commands;

use Illuminate\Console\Command;

class StartDockerCommand extends Command
{
    protected $signature = 'dockr:start';

    protected $description = 'Start Docker containers';

    public function handle()
    {
        $this->info('Starting Docker containers...');
        passthru('docker-compose -f ' . base_path('vendor/zyrn/dockr-pkg/docker-compose.yml') . ' up -d');
    }
}
