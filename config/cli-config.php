<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;

require 'bootstrap.php';

$entityManager = GetEntityManager();
return ConsoleRunner::createHelperSet($entityManager);
