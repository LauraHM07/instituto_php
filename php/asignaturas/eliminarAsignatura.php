<?php
    require 'claseAsignatura.php';
    
    session_start();

    $asignaturas= $_SESSION["asignaturas"];

    $pos = $_POST['pos'];

    array_splice($asignaturas, $pos, 1);

    $_SESSION["asignaturas"] = $asignaturas;

    header('Location:asignaturas.php');
?>