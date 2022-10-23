<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva asignatura</title>
</head>
<body>
    <h2>Nueva asignatura</h2>

    <form action="altaAsignatura.php" method="post">
        <label for="codigo">Nombre: </label>
        <input type="text" name="codigo">
        <br/><br/>

        <label for="descripcion">Descripción: </label>
        <input type="text" name="descripcion">
        <br/><br/>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>