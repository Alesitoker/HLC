<?php
    include('../funciones.php');

    $conexion = mysqli_connect("localhost", "root", "", "base_de_datos_1") or die ("<h1>Error al conectar con la base de datos</h1>");
    
    $consulta = query($conexion, "SELECT cod_hospital, nombre, direccion, num_plazas FROM hospitales ORDER BY 4");

    if (mysqli_errno($conexion) != 0) {
        errorMessage($conexion);
    } else if (mysqli_num_rows($consulta) > 0) {
        echo "<h1>LISTADO DE LOS HOSPITALES</h1>";
        numRows($consulta, 'Número de empleados: ');
        drawTable($consulta, ['COD HOSPITAL', 'NOMBRE', 'DIRECCIÓN', 'NUM_PLAZAS']);
    } else {
        echo '<h1>NO HAY HOSPITALES</h1>';
    }
?>