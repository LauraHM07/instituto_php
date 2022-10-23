<?php
    require 'claseAsignatura.php';

    session_start();

    $asignaturas = $_SESSION["asignaturas"];

    $asignatura = new Asignatura($_POST['codigo'], $_POST['descripcion']);

    $asignaturas[$_POST["pos"]] = $asignatura;

    $_SESSION["asignaturas"] = $asignaturas;

    header('Location:asignaturas.php');
?>