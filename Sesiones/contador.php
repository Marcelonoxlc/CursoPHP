<?php
session_name("CON");
session_id("php");
session_start();

if(isset($_SESSION['contandor'])){
    $_SESSION['contandor']++;
}else{
    $_SESSION['contandor']=1; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo session_id(); ?>
    <br>
    <?php echo "esta página se ha recargado " . $_SESSION['contandor'] . " veces " ?>

    <br>
    <?php echo "Hola " . $_SESSION['Nombre'];?>
    
    <a href="cerrar.php">Eliminar cuenta</a>
</body>
</html>