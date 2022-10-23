<?php  
    require 'claseAlumno.php';

    session_start();

    $alumno = new Alumno($_POST['nombre'], $_POST['apellidos'], $_POST['dni'], $_POST['direccion'], $_POST['email']);

    array_push($_SESSION["alumnos"], $alumno);

    header('Location:alumnos.php');
?>