<?php
require 'vendor/autoload.php';
require 'database.php';

use app\models\Actor;

$actor=new Actor;
$actor->first_name = 'Paco';
$actor->last_name = 'Gonzàlez';
$actor->save();

// Obtener todos los registros
$actors = Actor::all();

foreach ($actors as $actor) {
    echo $actor->first_name . "<br>";
}