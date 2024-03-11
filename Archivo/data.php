<?php

    // traer los datos de archivos

    echo $_FILES['fichero']['name']."<br>"; // nombre del archivo
    echo $_FILES['fichero']['tmp_name']."<br>"; // nombre de la ruta
    echo $_FILES['fichero']['type']."<br>"; // tipo de archivo
    echo $_FILES['fichero']['error']."<br>"; // caso de error
    echo $_FILES['fichero']['size']."<br>"; // tamaño del archivo

?>