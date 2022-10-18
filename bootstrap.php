<?php

require_once "vendor/autoload.php";

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

$paths = array(__DIR__ . './src/models');
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;

$dbParams = array(
    'driver' => 'pdo_mysql',
    'host' => '127.0.0.1',
    'dbname' => 'my-cms',
    'user' => 'root',
    'password' => '',
);

$config = ORMSetup::createAnnotationMetadataConfiguration($paths, $isDevMode, $proxyDir, $cache,);
$entityManager = EntityManager::create($dbParams, $config);
