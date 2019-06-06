#!/usr/bin/env php
<?php

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/bootstrap.php';
use Symfony\Component\Console\Application;
use DownloadGithub\MetadataDownload\MetadataDownloadCommand;

$application = new Application();

// ... register commands
$application->add(new MetadataDownloadCommand());
$application->run();