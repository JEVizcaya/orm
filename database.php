<?php

require 'vendor/autoload.php';
require 'config.php';
use Illuminate\Database\Capsule\Manager as Capsule;



$capsule = new Capsule;

// Configura la conexión a la base de datos
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => HOST,
    'database' => DB_DATABASE,
    'username' => DB_USER,
    'password' => DB_PASS,
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
]);

// Configura Eloquent para usar el Capsule Manager
$capsule->setAsGlobal();
$capsule->bootEloquent();
