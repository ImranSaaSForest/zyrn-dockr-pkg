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
        switch ($version) {
            case '8.0':
                $this->info("Running installation command for PHP 8.0");
                // Example command for installing PHP 8.0
                exec("sudo apt-get install php8.0 -y", $output, $returnVar);
                break;
            case '8.1':
                $this->info("Running installation command for PHP 8.1");
                // Example command for installing PHP 8.1
                exec("sudo apt-get install php8.1 -y", $output, $returnVar);
                break;
            case '8.2':
                $this->info("Running installation command for PHP 8.2");
                // Example command for installing PHP 8.2
                exec("sudo apt-get install php8.2 -y", $output, $returnVar);
                break;
            case '8.3':
                $this->info("Running installation command for PHP 8.3");
                // Example command for installing PHP 8.3
                exec("sudo apt-get install php8.3 -y", $output, $returnVar);
                break;
            default:
                $this->error("Unsupported PHP version: $version. Please specify a version between 8.0 and 8.3.");
                return;
        }

        // Check if the command executed successfully
        if ($returnVar === 0) {
            $this->info("PHP version $version installed successfully.");
        } else {
            $this->error("Failed to install PHP version $version. Please check the logs for more details.");
        }
    }
}
