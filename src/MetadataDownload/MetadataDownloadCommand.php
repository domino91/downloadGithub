<?php

namespace DownloadGithub\MetadataDownload;

use function GetEntityManager;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MetadataDownloadCommand extends Command {

    protected static $defaultName = 'app:download-metadata';

    protected function configure()
    {
        $this
            ->setDescription('Download metadata from github')
            ->setHelp('This command allows you to download all metadata-repos from github');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    }

}