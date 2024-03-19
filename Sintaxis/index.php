<?php
    //VARIABLES------------------------------------------------------------------------------------------------------------------------

    // Variable de tipo entero
    $entero = 42;

    // Variable de tipo flotante
    $flotante = 3.14;

    // Variable de tipo cadena (string)
    $cadena = "Hola, mundo!";

    // Variable booleana
    $booleano = false;

    // Variable de tipo arreglo
    $arreglo = array(1, 2, 3, 4, 5);

    // Variable de tipo objeto
    $objeto = new stdClass();

    // Variable nula
    $nula = null;

    // Constante
    const CONSTANTE = "gato";

    //ARRAYS--------------------------------------------------------------------------------------------------------------------------

    //Arrays escalares

    $personaje=["Ichigo","Rukia","Renji","Yoruichi","Urahara"];

    echo $personaje[1];
    echo "<br>";

    //Arrays asociativos

    $juego=[
        "nombre"=>"Final Fantasy",
        "costo"=>"$29.990",
        "compañia"=>"Square-Enix"
    ];

    echo $juego["nombre"];
    echo "<br>";
    echo $juego["compañia"];
    echo "<br>";

    //Arrays de multiples dimensiones

    $consola=[
        "nombre"=>"Play Station",
        "costo"=>"$399.990",    
        "compañia"=>"Sony",
        "prestigio"=>["Bajo","Medio","Alto"]
    ];

    echo $consola["prestigio"][2];
    echo "<br>";

    //CONDICIONALES---------------------------------------------------------------------------------------------------------------

    if(5>0){
        echo "cinco es mayor a cero";
        echo "<br>";
    }

    $num = 100;

    if($num <= 50){
        echo $num . " es menor que 50";
        echo "<br>";
    }else{
        echo $num . " es mayor que 50";
        echo "<br>";
    }

    //SWITCH--------------------------------------------------------------------------------------------------------------------------

    $fruta="platano";

    switch($fruta){
        case "platano":
            echo "la fruta es platano";
            echo "<br>";
        break;

        case "manzana":
            echo "la fruta es manzana";
            echo "<br>";
        break;

        default:
            echo "No hay ninguna fruta en la variable";
            echo "<br>";
    }

    $dia="6";

    switch($dia){
        case 1:
            echo "Lunes";
            echo "<br>";
        break;
        case 2:
            echo "Martes";
            echo "<br>";
        break;
        case 3:
            echo "Miércoles";
            echo "<br>";
        break;
        case 4:
            echo "Jueves";
            echo "<br>";
        break;
        case 5:
            echo "Viernes";
            echo "<br>";
        break;
        case 6:
            echo "Sábado";
            echo "<br>";
        break;
        case 7:
            echo "Domingo";
            echo "<br>";
        break;
    }

    //BUCLES-------------------------------------------------------------------------------------------------------------------------
    
    //While

    $contador = 0;

    while($contador<=20){
        echo $contador;
        echo "<br>";
        $contador++;
    }

    //Do While

    $inverso = 20;

    do{
        echo $inverso;
        echo "<br>";
        $inverso--;
    }while($inverso>=1);

    //For

    for($i=1; $i <= 20; $i++){
        echo $i;
        echo "<br>";
    }

    //FOREACH------------------------------------------------------------------------------------------------------------------------

    $guerrero_z=["Goku","Gohan","Krillin","Piccolo","Vegeta"];

    $anime=[
        "nombre"=>"Dragon Ball Z",
        "demografia"=>"Shonen",
        "autor"=>"Akira Toriyama"
    ];

    foreach($guerrero_z as $luchador){
        echo $luchador;
        echo "<br>";
    }

    foreach($anime as $campo => $registro){
        echo $campo . ": " . $registro;
        echo "<br>";
    }

    //CONTINUAR Y BREAK--------------------------------------------------------------------------------------------------------------

    $cuenta = 0;

    while($cuenta<=20){
        echo $cuenta;
        echo "<br>";
        if($cuenta==15){
            break;
        }
        $cuenta++;
    }

    $refresco=["Coca-cola","Fanta","Sprite","Pepsi","Kem"];

    foreach($refresco as $bebida){
        echo $bebida    ;
        echo "<br>";
        if($bebida=="Pepsi"){
            continue;
        }
    }

    $comedia=["Los Simpson","Bojack Horseman","Futurama","South Park","Family Guy"];

    foreach($comedia as $animacion){
        if($animacion=="Futurama"){
            continue;
        }
        echo $animacion    ;
        echo "<br>";

    }

    // While: Se ejecuta mientras la condición sea verdadera.

    // Do While: La condición se evalúa después de ejecutar el bloque de código. Esto asegura que el bloque se ejecute al menos una vez,
    //incluso si la condición es falsa inicialmente.

    // For: Este ciclo es una forma compacta de escribir ciclos que consisten en tres partes: la inicialización, la condición, y la expresión de incremento.

    // Foreach: Este ciclo se utiliza específicamente para iterar sobre matrices y otros objetos iterables.

    // Break: Se utiliza para salir inmediatamente del ciclo más cercano en el que está contenido.

    // Continue: Se utiliza para omitir el resto del código en una iteración específica del ciclo y pasar a la siguiente iteración. 

    //FUNCIONES-------------------------------------------------------------------------------------------------------------------------

    //Funcion básica
    function saludar(){
        echo "hola mundo";
        echo "<br>";
    }

    saludar();

    //Funcion con argumentos
    function valorar($equipo, $posicion){
        echo "el equipo " . $equipo . " se encuentra " . $posicion;
        echo "<br>";
    }

    valorar("Universidad de Chile","Primero");
    
    //Funcion con return
    function sumar($numero1,$numero2){
        return $numero1 + $numero2;
    }

    $resultado = sumar(10,20);
    echo "el resultado de la suma es: ". $resultado;
    echo "<br>";

    //Funcion con arrays
    $array = [1,2,3];
    
    list($a,$b,$c) = $array;

    echo $c;
    echo "<br>";

    //Otros------------------------------------------------------------------------------------------------------------------------

    $variable = "Programacion";
    var_dump($variable); // ver el contenido de una variable


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?php echo $entero;?></h3>
    <h3><?php echo $flotante;?></h3>
    <h3><?php echo $cadena;?></h3>
    <h3><?php echo $booleano;?></h3>
</body>
</html>