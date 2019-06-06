<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

function GetEntityManager()
{
    $isDevMode = true;
    $config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);

    $conn = array(
        'driver' => 'pdo_sqlite',
        'path' => __DIR__ . '/var/db.sqlite',
    );

    return EntityManager::create($conn, $config);
}