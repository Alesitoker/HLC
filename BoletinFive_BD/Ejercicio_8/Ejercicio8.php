<?php
    include('../funciones.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 8</title>
    <link rel=stylesheet href=../style/style.css>
</head>
<body>
    <h1>BAJA DE HOSPITALES</h1>
    <div>
        <form action="ejercicio8.php" method="POST">
            <label for="hops">Número de hospital:</label>
            <input id="hosp" name="cod_hospital" type="text" size="5"/>
            <br/>
            <input class="button" name="baja" type="submit" value="Baja de hospital"/>
            <input class="button" name="submitQuery" type="submit" value="Visualizar datos del hospital"/>
        </form>
        <hr/>
    <div>
    
    <?php
        $conexion = mysqli_connect("localhost", "root", "", "base_de_datos_1") or die ("<h1>Error al conectar con la base de datos</h1>");
        if (isset($_POST['cod_hospital']) && is_numeric($_POST['cod_hospital'])) {
            $cod_hospital = $_POST['cod_hospital'];

            if (isset($_POST['submitQuery'])) {

                    $consulta = query($conexion, "SELECT nombre, direccion FROM hospitales where cod_hospital = $cod_hospital");
                    
                    if (mysqli_errno($conexion) != 0) {
                        errorMessage($conexion);
                    } else if (mysqli_num_rows($consulta) > 0) {
                        $fila = mysqli_fetch_array($consulta);
                        echo 'NOMBRE DEL HOSPITAL A ELIMINAR: '.utf8_encode($fila['nombre']).'<br/>';
                        echo 'DIRECCIÓN DEL HOSPITAL A ELIMINAR: '.utf8_encode($fila['direccion']);
                    }
            } else if (isset($_POST['baja'])) {

                query($conexion, "DELETE FROM hospitales WHERE cod_hospital = $cod_hospital");

                if (mysqli_errno($conexion) != 0) {
                    errorMessage($conexion);
                } else if (mysqli_affected_rows($conexion) > 0) {
                    echo '<h1>REGISTRO ELIMINADO</h1>';
                }
            }
        }
        mysqli_close($conexion);
    ?>
</body>
</html>