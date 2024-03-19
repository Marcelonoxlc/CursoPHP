<?php

// Asignación por referencia

$texto = "Música"; // variable definida

$opcion1 = $texto; // opcion 1 recibe el valor de texto
$opcion2 = &$texto; // opcion 2 obtiene el valor de texto, pero este cambiará si texto cambia

echo $opcion1 . " " . $opcion2 . " " ; // mostramos el valor actual de opcion 1 y 2
echo "<br>";

$texto = "Arte"; // cambiamos el valor de la variable texto

echo $opcion1 . " " . $opcion2 . " " ; //volvemos a mostrar las opciones, opcion 1 mantiene el primer valor que recibió
                                       //mientras que opcion 2 mostrara el valor nuevo
echo "<br>";
