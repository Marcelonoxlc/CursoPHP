<?php

if(mime_content_type($_FILES['fichero']['tmp_name'])!="image/jpeg" && // detectamos si el tipo de archivo es diferente al pedido para no
    mime_content_type($_FILES['fichero']['tmp_name'])!="image/png" ){ // permitir su acceso
        echo "el tipo de archivo no es compatible";
        exit();
    }

if(($_FILES['fichero']['size']/1024)>3072){ // limitamos el tamaño del archivo a 3 mb
    echo "el archivo es mas grande que el tamaño permitido";
    exit();
}

if(!file_exists("archivosRecibidos")){ // si la carpeta existe no la creara, de no existir la crea
    if(mkdir("archivosRecibidos",0777)){
        echo "Error al crear el directorio";
        exit();
    }
}


chmod("archivosRecibidos",0777); 

if(move_uploaded_file($_FILES['fichero']['tmp_name'],"archivosRecibidos/".$_FILES['fichero']['name'])){
    echo "el archivo se movió correctamente";
}else{
    echo "no se ha podido mover el archvo";
}


?>