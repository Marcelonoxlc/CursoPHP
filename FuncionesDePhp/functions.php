<?php

    //FUNCIONES DE TEXTO-------------------------------------------------------------------------------------------------------------

    $texto="FUNCION QUE CONVIERTE MAYUSCULAS EN MINUSCULAS";

    echo strtolower($texto);
    
    echo "<br>";

    //------------------------------------------------------

    $texto2="funcion que convierte minusculas en mayusculas";
    echo strtoupper($texto2);

    echo "<br>";
    
    //------------------------------------------------------

    $texto3="funcion que convierte a mayuscula la primera letra";
    echo ucfirst($texto3);

    echo "<br>";
    
    //------------------------------------------------------ 
    
    $texto3="funcion que convierte a mayuscula la primera letra de cada palabra";
    echo ucwords($texto3);

    echo "<br>";

        //------------------------------------------------------ 
    
        $texto4="Funcion para obtener el numero de caracteres del texto";

        $longitud=strlen($texto4);

        echo "El texto: " . $texto4 . " zcontiene " . $longitud . " caracteres";
    
        echo "<br>";


        //OBTENER FECHA Y HORA----------------------------------------------------------------------------------------------------------

        date_default_timezone_set("America/Santiago"); // Se obtiene la zona horaria local

        function FechaCompleta(){ 
            $fecha_dia=date("d");
            $fecha_mes=date("m");
            $fecha_año=date("Y");

            $dia_semana=[
                "Monday"=>"Lunes",
                "Tuesday"=>"Martes",
                "Wednesday"=>"Miércoles",
                "Thursday"=>"Jueves",
                "Friday"=>"Viernes",
                "Saturday"=>"Sábado",
                "Sunday"=>"Domingo"
            ];
    
            $mes_anual=[
                "01"=>"Enero",
                "02"=>"Febrero",
                "03"=>"Marzo",
                "04"=>"Abril",
                "05"=>"Mayo",
                "06"=>"Junio",
                "07"=>"Julio",
                "08"=>"Agosto",
                "09"=>"Semptiembre",
                "10"=>"Octubre",
                "11"=>"Noviembre",
                "12"=>"Diciembre",
    
            ];
    
            $fecha_final=$dia_semana[date("l")]. " " . $fecha_dia ." de " . $mes_anual[$fecha_mes] . " " . $fecha_año;
    
            return $fecha_final;
        }
        echo FechaCompleta();

        echo "<br>";




?>