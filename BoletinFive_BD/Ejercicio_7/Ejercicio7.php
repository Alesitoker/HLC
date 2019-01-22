<?php
    include('../funciones.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 7</title>
    <link rel=stylesheet href=../style/style.css>
</head>
<body>
    <h1>ENTRADA DE DATOS DE HOSPITALES</h1>
    <div>
        <form action="ejercicio7.php" method="POST">
            <label for="hosp">Número de hospital:</label>
            <input id="hosp" name="cod_hospital" type="text" size="5"/>
            <br/>
            <label for="nombre">Nombre:</label>
            <input id="nombre" name="nombre" type="text" size="17"/>
            <br/>
            <label for="direc">Dirección:</label>
            <input id="direc" name="direccion" type="text" size="15"/>
            <br/>
            <label for="plazas">Número de plazas:</label>
            <input id="plazas" name="num_plazas" type="text" size="8"/>
            <br/>
            <input class="button" name="submitInsert" type="submit" value="Insertar hospital"/>
            <input class="button" name="Reset" type="reset" value="Cancelar entrada"/>
            <br/>
            <input class="button" name="submitQuery" type="submit" value="Listar hospitales"/>
        </form>
        <hr/>
    <div>
    
    <?php
        $conexion = mysqli_connect("localhost", "root", "", "base_de_datos_1") or die ("<h1>Error al conectar con la base de datos</h1>");

        if (isset($_POST['submitQuery'])) {
                $consulta = query($conexion, "SELECT * FROM hospitales");
                
                if (mysqli_errno($conexion) != 0) {
                    errorMessage($conexion);
                } else if (mysqli_num_rows($consulta) > 0) {
                    echo "<h1>LISTADO DE LOS HOSPITALES</h1>";
                    drawTable($consulta, ['COD_HOSPITAL', 'NOMBRE', 'DIRECCION', 'NUM_PLAZAS']);
                }
        } else if (isset($_POST['submitInsert']) && isset($_POST['cod_hospital']) && isset($_POST['nombre']) && 
                    isset($_POST['direccion']) && isset($_POST['num_plazas'])) {
            if (is_numeric($_POST['cod_hospital'])) {
                $cod_hospital = $_POST['cod_hospital'];
                $nombre = $_POST['nombre'];
                $direccion = $_POST['direccion'];
                $num_plazas = $_POST['num_plazas'];

                query($conexion, "INSERT INTO hospitales VALUES ('$cod_hospital', '$nombre', '$direccion', '$num_plazas')");

                if (mysqli_errno($conexion) != 0) {
                    errorMessage($conexion);
                } else if (mysqli_affected_rows($conexion) > 0) {
                    echo '<h1>REGISTRO INSERTADO</h1>';
                }
            }
        }
        mysqli_close($conexion);
    ?>
</body>
</html>