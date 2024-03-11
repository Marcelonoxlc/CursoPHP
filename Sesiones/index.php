<?php 
session_name("LOGIN");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="POST">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario">
        <br>
        <label for="clave">Contraseña</label>
        <input type="password" name="clave">
        <button type="submit">enviar</button>
    </form>
</body>
</html>