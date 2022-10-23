<?php
    require 'claseAsignatura.php';

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignaturas</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <h1>Asignaturas</h1>

    <table border="1" width="700em" style="text-align:center">
        <tr">
            <td>
                <p>Código</p>
            </td>
            <td>
                <p>Descripción</p>
            </td>
        </tr>

        <?php
            $asignaturas = $_SESSION["asignaturas"];

            foreach($asignaturas as $i => $asignatura) {
                echo "<tr>";
                echo "<td> <p>" . $asignatura->get_codigo() . "</p> </td>";
                echo "<td> <p>" . $asignatura->get_descripcion() . "</p> </td>";
                echo "<td>
                            <form action='editarAsignatura.php' method='post'>
                                <input type='submit' value='Editar'>
                                <input type='hidden' name='codigo' value='".$asignatura->get_codigo()."'>
                            </form>
                        </td>
                        <td>
                            <form action='eliminarAsignatura.php' method='post'>
                                <input type='submit' value='Borrar'>
                                <input type='hidden' name='pos' value='".$i."'>
                            </form>
                        </td>";
                echo "</tr>";
            }
        ?>
    </table>

    <br/>

    <button id="boton"><a href="nuevaAsignatura.php">Nuevo asignatura</a></button>
    <button id="boton"><a href="../../index.php">Cerrar</a></button>
</body>
</html>