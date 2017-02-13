<?php

require_once './vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query;

$paths = ["."];
$isDevMode = false;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'doctrine',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$em = EntityManager::create($dbParams, $config);

require_once './model.php';

$query = $em->createQuery('SELECT p FROM Person p');
$users = $query->getResult(Query::HYDRATE_OBJECT);

var_dump($users);

$dql = "SELECT pr FROM Product pr";
$query = $em->createQuery($dql);
$products = $query->getResult(Query::HYDRATE_OBJECT);
var_dump($products);
