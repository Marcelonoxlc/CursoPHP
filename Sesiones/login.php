<?php

if($_POST['usuario']=="Marcelo" && $_POST['clave']=="1234"){

    session_name("LOGIN");
    session_start();

    $_SESSION["Nombre"]="Marcelo";
    $_SESSION["Edad"]="27";
    $_SESSION["Nacionalidad"]="Chileno";

    echo "Sesion iniciada correctamente";
}else{
    echo "Datos incorrectos";
}

?>