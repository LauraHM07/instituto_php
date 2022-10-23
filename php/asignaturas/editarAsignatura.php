<?php
    require 'claseAsignatura.php';

    session_start();

    $asignaturas = $_SESSION["asignaturas"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar asignatura</title>
</head>
<body>
<h1>Editar asignatura</h1>

<?php
    $codigo = $_POST['codigo'];
    $posicion = 0;
    
    foreach ($asignaturas as $i => $asignatura) {
        if ($asignatura->get_codigo() == $codigo) {
            $codigo = $asignatura->get_codigo();
            $descripcion = $asignatura->get_descripcion();

            break;
        }

        $posicion++;
    }

    echo "<form action='editado.php' method='post'>
            Código: <input type='text' name='codigo' value='".$codigo."'>
            <br/><br/>
            Descripción: <input type='text' name='descripcion' value='".$descripcion."'>
            <br/><br/>
            <input type='hidden' value='".$posicion."' name='pos'>
            <input type='submit' value='Editar'>
        </form>"
?>
</body>
</html>