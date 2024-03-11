<?php

$numero=null; // Variable con valor nulo

//$numero=10; // obtiene un nuevo valor

//unset($numero); // la funcion unset deja la variable con valor nulo

if(is_null($numero)){ //funcion de php is null para comprobar si la variable es nula
    echo "es nulo";
}else{
    echo "no es nulo";
}

//-------------------------------------------------------------------------------------------
echo "<br>";

$digito=0;

if(empty($digito)){
    echo "no hay digitos";
}else{
    echo "si hay digitos";
}

//-------------------------------------------------------------------------------------------

echo "<br>";


?>