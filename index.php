<?php
require 'vendor/autoload.php';
require 'database.php';
use App\Models\Actor;
use App\Models\Film;
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
 /*
 
 $peliculas=Film::all();

foreach ($peliculas as $value) {
    echo $value->title;
    foreach ($value->actors as $a) {
        echo $a->first_name.",";
    }
    echo "<br>";*/

 
    $actor=Actor::find(5);
    echo $actor->first_name;
    echo "<br>";
    $pelicula=Film::find(3);
    foreach ($pelicula->actors as $key => $value) {
        echo $value->first_name." , ";
    }
    echo "<br>";
    $pelicula->actors()->attach($actor->actor_id);
    $pelicula=Film::find(3);
    foreach ($pelicula->actors as $key => $value) {
        echo $value->first_name." , ";
    }    


