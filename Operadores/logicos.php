<?php
    // Operadores Lógicos
    $p = true;
    $q = false;

    // AND lógico
    echo "AND lógico: ";
    var_dump($p && $q); // Devuelve true si ambas lo son, si una es false, devolverá false
    echo "<br>";

    // OR lógico
    echo "OR lógico: "; 
    var_dump($p || $q); // Devuelve true si al menos una es true
    echo "<br>";

    // NOT lógico
    echo "NOT lógico: ";
    var_dump(!$p); // Invierte el valor por ende devolverá lo contrario al valor original
    echo "<br>";

    echo "<br>";

    $q = (!$q); // q obtiene el valor contrario a q
    echo $p;

    

?>