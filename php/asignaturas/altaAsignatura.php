<?php  
    require 'claseAsignatura.php';

    session_start();

    $asignatura = new Asignatura($_POST['codigo'], $_POST['descripcion']);

    array_push($_SESSION["asignaturas"], $asignatura);

    header('Location:asignaturas.php');
?>