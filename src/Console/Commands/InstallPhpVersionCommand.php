<?php

namespace Zyrn\DockrPkg\Console\Commands;

use Illuminate\Console\Command;

class InstallPhpVersionCommand extends Command
{
    protected $signature = 'dockr:install-php {version}';
    protected $description = 'Install a specific PHP version';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $version = $this->argument('version');
        $this->info("Installing PHP version: $version");

        // Implement the PHP installation logic here
        // This might involve running system commands or interacting with package managers
        $this->installPhpVersion($version);

        $this->info("PHP version $version installed successfully.");
    }

    protected function installPhpVersion($version)
    {
        // Replace this with the actual installation logic
        // For example, if using apt on Ubuntu:
        // exec("sudo apt-get install php$version");
    }
}
