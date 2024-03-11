<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="example.php" method="POST"> 

        <label for="juego">Asignatura: </label>

        <select name="juego[]" id="juego" multiple> <!-- seleccion multiple -->

            <option value="Mario Bross">Mario Bross</option>
            <option value="Mortal Kombat">Mortal Kombat</option>
            <option value="Call of Duty">Call of Duty</option>
            <option value="Final Fantasy">Final Fantasy</option>
            <option value="God of War">God of War</option>

        </select>

        <br>
        <hr>
        <br>

        <!-- -------------------------------------------------------------------------------------------- -->

        <label for="opcion-1">
        <input type="radio"id="opcion-1" value="Nike" name="marcas">Nike</label>

        <label for="opcion-2">
        <input type="radio"id="opcion-2" value="Adidas" name="marcas">Adidas</label>

        <label for="opcion-3">
        <input type="radio"id="opcion-3" value="Gucci" name="marcas">Gucci</label>

        <br>
        <hr>
        <br>


        <button type="submit">enviar</button>
    </form>
    
</body>
</html>