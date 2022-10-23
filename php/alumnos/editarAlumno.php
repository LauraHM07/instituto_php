<?php
    require 'claseAlumno.php';

    session_start();

    $alumnos = $_SESSION["alumnos"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar alumno</title>
</head>
<body>
<h1>Editar alumno</h1>

<?php
    $dni = $_POST['dni'];
    $posicion = 0;
    
    foreach ($alumnos as $i => $alumno) {
        if ($alumno->get_dni() == $dni) {
            $nombre = $alumno->get_nombre();
            $apellidos = $alumno->get_apellidos();
            $dni = $alumno->get_dni();
            $direccion = $alumno->get_direccion();
            $email = $alumno->get_email();

            break;
        }

        $posicion++;
    }

    echo "<form action='editado.php' method='post'>
            Nombre: <input type='text' name='nombre' value='".$nombre."'>
            <br/><br/>
            Apellidos: <input type='text' name='apellidos' value='".$apellidos."'>
            <br/><br/>
            DNI: <input type='tex't name='dni' value='".$dni."'>
            <br/><br/>
            Direccion: <input type='text' name='direccion' value='".$direccion."'>
            <br/><br/>
            Email: <input type='text' name='email' value='".$email."'>
            <br/><br/>
            <input type='hidden' value='".$posicion."' name='pos'>
            <input type='submit' value='Editar'>
        </form>"
?>
</body>
</html>