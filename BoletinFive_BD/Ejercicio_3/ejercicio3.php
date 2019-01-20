<?php
    include('../funciones.php');

    if (isset($_POST['submitQuery']) && isset($_POST['num_hospital'])) {

        $codHospital = $_POST['num_hospital'];

        $conexion = mysqli_connect("localhost", "root", "", "base_de_datos_1") or die ("<h1>Error al conectar con la base de datos</h1>");
        
        $consulta = query($conexion, "SELECT dni, apellidos, funcion FROM personas WHERE cod_hospital = $codHospital");

        if (mysqli_errno($conexion) != 0) {
            errorMessage($conexion);
        } else if (mysqli_num_rows($consulta) > 0) {
            $consultaHos = query($conexion, "SELECT nombre FROM hospitales where cod_hospital = $codHospital");
            $nombreHospital = nameCode($consultaHos);
            echo "<h1>Listados de los empleados del hospital de $nombreHospital</h1>";
            drawTable($consulta, ['DNI', 'APELLIDO', 'FUNCIÓN']);
            numRows($consulta, 'Número de empleados: ');
        } else {
            echo "<h1>NO HAY EMPLEADOS EN EL HOSPITAL CON EL CODIGO: $codHospital</h1>";
        }
    } else {
        header("Location: formulario.html");
    }
?>