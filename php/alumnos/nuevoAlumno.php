<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo alumno</title>
</head>
<body>
    <h2>Nuevo alumno</h2>

    <form action="altaAlumno.php" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre">
        <br/><br/>

        <label for="apellidos">Apellidos: </label>
        <input type="text" name="apellidos">
        <br/><br/>

        <label for="dni">DNI: </label>
        <input type="text" name="dni">
        <br/><br/>

        <label for="direccion">Dirección: </label>
        <input type="text" name="direccion">
        <br/><br/>

        <label for="email">Email: </label>
        <input type="text" name="email">
        <br/><br/>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>