<?php
    include('../funciones.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 9</title>
    <link rel=stylesheet href=../style/style.css>
</head>
<body>
    <h1>MODIFICACIÓN DE HOSPITALES</h1>
    <div>
        <form action="Ejercicio9.php" method="POST">
            <label for="hospi">Número de hospital a modificar:</label>
            <input id="hospi" name="cod_hospital" type="text" size="5"/>
            <br/>
            <input class="button" name="visualizar" type="submit" value="Visualizar los datos"/>
            <input class="button" type="submit" value="cancelar"/>
            <br/>
            <input class="button" name="listar" type="submit" value="Visualizar datos del hospital">
        </form>
        <hr/>
    <div>
    
    <?php
        $conexion = mysqli_connect("localhost", "root", "", "base_de_datos_1") or die ("<h1>Error al conectar con la base de datos</h1>");

        if (isset($_POST['cod_hospital']) && is_numeric($_POST['cod_hospital'])) {

            $cod_hospital = $_POST['cod_hospital'];
            $consulta = query($conexion, "SELECT nombre, direccion, num_plazas FROM hospitales where cod_hospital = $cod_hospital");

            if (mysqli_errno($conexion) == 0) {
                if (mysqli_num_rows($consulta) > 0) {
                    if (isset($_POST['visualizar'])) {
                        $fila = mysqli_fetch_array($consulta);

                        $nombre = utf8_encode($fila['nombre']);
                        $direccion = utf8_encode($fila['direccion']);
                        $num_plazas = utf8_encode($fila['num_plazas']);
                        // mostramos el formulario de actualizacion si tenemos una.
                        echo "<div class='actualizar'><form action='ejercicio9.php' method='POST'>
                        <label for='nombre'>Nombre:</label>
                        <input id='nombre' name='nombre' type='text' size='17' value='$nombre'/>
                        <br/>
                        <label for='direc'>Dirección:</label>
                        <input id='direc' name='direccion' type='text' size='15' value='$direccion'/>
                        <br/>
                        <label for='plazas'>Número de plazas:</label>
                        <input id='plazas' name='num_plazas' type='text' size='8' value='$num_plazas'/>
                        <br/>
                        <input class='button' name='update' type='submit' value='Actualizar'/>
                        <input name='oculto_codHospital' type='hidden' value='$cod_hospital'/>
                        </form><div>";
                    } else if (isset($_POST['listar'])) {
                        echo "<h1>DATOS DEL HOSPITAL $cod_hospital</h1>";
                        drawTable($consulta, ['NOMBRE', 'DIRECCION', 'NUM_PLAZAS']);
                    }
                } else {
                    // si no obtenemos filas de la consulta.
                    echo "<h1>NO EXISTE NINGUN HOSPITAL CON CODIGO: $cod_hospital</h1>";
                }
            } else {
                errorMessage($conexion);
            }
        } else if (isset($_POST['update']) && isset($_POST['oculto_codHospital']) && 
                    isset($_POST['nombre']) && isset($_POST['direccion']) && isset($_POST['num_plazas'])) {
            $cod_hospital = $_POST['oculto_codHospital'];
            $nombre = $_POST['nombre'];
            $direccion = $_POST['direccion'];
            $num_plazas = $_POST['num_plazas'];

            query($conexion, "UPDATE hospitales SET nombre = '$nombre', direccion = '$direccion', num_plazas = '$num_plazas' 
            where cod_hospital = $cod_hospital");

            if (mysqli_affected_rows($conexion) > 0) {
                echo '<h1>ACTUALIZACIÓN REALIZADA CORRECTAMENTE</h1>';
            }

        }
        mysqli_close($conexion);
    ?>
</body>
</html>