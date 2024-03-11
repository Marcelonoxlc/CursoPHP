<?php

    //Encriptación

    $contraseña="marcelo123";

    echo hash("whirlpool",$contraseña); // whirlpool puede ser cambiado por otros métodos de encriptado

    echo "<br>";

    //---------------------------------------------------------------------------------------------------------------------------------

    $clave="123marcelo";

    echo password_hash($clave,PASSWORD_DEFAULT); // La contraseña es la misma pero el encriptado cambia constantemente

    echo "<br>";

    echo password_hash($clave,PASSWORD_BCRYPT); 

    //--------------------------------------------------------------------------------------------------------------------------------

    

?>