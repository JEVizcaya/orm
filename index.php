<?php
require 'vendor/autoload.php';
require 'database.php';
use App\Models\Actor;
/*
crear nuevo registro
$actor=new Actor;
$actor->first_name = 'Paco';
$actor->last_name = 'Gonzàlez';
$actor->save(); 

// Obtener todos los registros
$actors = Actor::all();

foreach ($actors as $actor) {
    echo $actor->first_name . "<br>";
} */
 
 use App\Models\Film;
 $peliculas=Film::all();

foreach ($peliculas as $value) {
    echo $value->title;
    foreach ($value->actors as $a) {
        echo $a->first_name.",";
    }
    echo "<br>";
    
}