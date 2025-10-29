<?php 
    require "animal.php";
    require "cachorro.php";
    require "gato.php";

    $animal = new Animal("Snow");
    $cachorro = new cachorro("rex");
    $gato = new gato("garfield");

    echo $animal->descrever() . "<br>"; 
    echo $animal->fazBarulho() . "<br>"; 
    echo $gato->ArranhaSofa() . "<br>";

    echo $cachorro->descrever() . "<br>"; 
    echo $cachorro->fazBarulho() . "<br>";
    echo $gato->ArranhaSofa() . "<br>";
?>