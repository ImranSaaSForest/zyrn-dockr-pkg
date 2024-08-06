<?php

// check_docker.php
if (shell_exec("docker --version") === null) {
    echo "Docker is not installed. Please install Docker first.\n";
    exit(1);
}

if (shell_exec("docker-compose --version") === null) {
    echo "Docker Compose is not installed. Please install Docker Compose first.\n";
    exit(1);
}

echo "Docker and Docker Compose are installed.\n";
