<?php
    include('../funciones.php');

    if (isset($_POST['submitQuery']) && isset($_POST['num_hospital']) && isset($_POST['func'])) {

        $codHospital = $_POST['num_hospital'];
        $funcion = strtoupper($_POST['func']);

        $conexion = mysqli_connect("localhost", "root", "", "base_de_datos_1") or die ("<h1>Error al conectar con la base de datos</h1>");
        
        $consulta = query($conexion, "SELECT dni, apellidos FROM personas WHERE cod_hospital = $codHospital AND funcion = '$funcion'");
        

        if (mysqli_errno($conexion) != 0) {
            errorMessage($conexion);
        } else if (mysqli_num_rows($consulta) > 0) {
            $consultaHos = query($conexion, "SELECT nombre FROM hospitales where cod_hospital = $codHospital");
            $nombreHospital = nameCode($consultaHos);
            echo "<h1>Listados de los empleados del hospital de $nombreHospital y función $funcion</h1>";
            drawTable($consulta, ['DNI', 'APELLIDO']);
            numRows($consulta, 'Número de empleados: ');
        } else {
            echo "<h1>NO HAY EMPLEADOS CON LA FUNCION $funcion EN EL HOSPITAL CON EL CODIGO $codHospital</h1>";
        }
        echo '<a href="formulario.html">Volver</a>';
        mysqli_close($conexion);
    } else {
        header("Location: formulario.html");
    }
?>