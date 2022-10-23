<?php
    session_start();

    if(!isset($_SESSION["alumnos"])) {
        $_SESSION["alumnos"] = [];
    }

    if(!isset($_SESSION["asignaturas"])) {
        $_SESSION["asignaturas"] = [];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Instituto</h1>

    <ul>
        <li><a href="php/alumnos/alumnos.php">Alumnos</a></li>
        <li><a href="php/asignaturas/asignaturas.php">Asignaturas</a></li>
    </ul>
</body>
</html>