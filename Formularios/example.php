<?php

    echo $_POST['Nombre'];

    echo "<br>";

    $nombre= $_POST['Nombre'];

    echo $nombre;


    echo "<br>";

    $asignatura= $_POST['asignatura'];

    echo $asignatura;

    echo "<br>";

    $colores= $_POST['colores'];

    echo $colores;

    echo "<br>";

    $juegos=$_POST['juego'];
    foreach($juegos as $juego){
        echo $juego;
    }

    echo "<br>";

    
    $marcas= $_POST['marcas'];

    echo $marcas;

?>