<?php
    require 'claseAlumno.php';

    session_start();

    $alumnos = $_SESSION["alumnos"];

    $alumno = new Alumno($_POST['nombre'], $_POST['apellidos'], $_POST['dni'], $_POST['direccion'], $_POST['email']);

    $alumnos[$_POST["pos"]] = $alumno;

    $_SESSION["alumnos"] = $alumnos;

    header('Location:alumnos.php');
?>