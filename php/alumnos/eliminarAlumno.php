<?php
    require 'claseAlumno.php';
    
    session_start();

    $alumnos= $_SESSION["alumnos"];

    $pos = $_POST['pos'];

    array_splice($alumnos, $pos, 1);

    $_SESSION["alumnos"] = $alumnos;

    header('Location:alumnos.php');
?>