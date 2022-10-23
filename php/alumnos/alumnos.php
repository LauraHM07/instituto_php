<?php
    require 'claseAlumno.php';

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <h1>Alumnos</h1>

    <table border="1" width="700em" style="text-align:center">
        <tr">
            <td>
                <p>Nombre</p>
            </td>
            <td>
                <p>Apellidos</p>
            </td>
            <td>
                <p>DNI</p>
            </td>
            <td>
                <p>Dirección</p>
            </td>
            <td>
                <p>Email</p>
            </td>
        </tr>

        <?php
            $alumnos = $_SESSION["alumnos"];

            foreach($alumnos as $i => $alumno) {
                echo "<tr>";
                echo "<td> <p>" . $alumno->get_nombre() . "</p> </td>";
                echo "<td> <p>" . $alumno->get_apellidos() . "</p> </td>";
                echo "<td> <p>" . $alumno->get_dni() . "</p> </td>";
                echo "<td> <p>" . $alumno->get_direccion() . "</p> </td>";
                echo "<td> <p>" . $alumno->get_email() . "</p> </td>";
                echo "<td>
                            <form action='editarAlumno.php' method='post'>
                                <input type='submit' value='Editar'>
                                <input type='hidden' name='dni' value='".$alumno->get_dni()."'>
                            </form>
                        </td>
                        <td>
                            <form action='eliminarAlumno.php' method='post'>
                                <input type='submit' value='Borrar'>
                                <input type='hidden' name='pos' value='".$i."'>
                            </form>
                        </td>";
                echo "</tr>";
            }
        ?>
    </table>

    <br/>

    <button id="boton"><a href="nuevoAlumno.php">Nuevo alumno</a></button>
    <button id="boton"><a href="../../index.php">Cerrar</a></button>
</body>
</html>