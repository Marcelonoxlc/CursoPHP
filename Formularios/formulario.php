<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>

    <form action="example.php" method="POST"> 

        <div>
            <label for="Nombre">Nombre: </label>
            <input type="text" name="Nombre" id="Nombre">
        </div>

        <br>
        <hr>
        <br>

        <label for="asignatura">Asignatura: </label>

        <select name="asignatura" id="asignatura">

            <option value="Lenguaje">Lenguaje</option>
            <option value="Matemáticas">Matemáticas</option>
            <option value="Historia">Historia</option>
            <option value="Fisica">Fisica</option>
            <option value="Biologia">Biologia</option>

        </select>

        <br>
        <hr>
        <br>

        <label for="opcion-1">

        <input type="checkbox"id="opcion-1" value="Azul" name="colores">

        Azul

        </label>

        <br>
        <hr>
        <br>


        <button type="submit">enviar</button>
    </form>
    
</body>
</html>