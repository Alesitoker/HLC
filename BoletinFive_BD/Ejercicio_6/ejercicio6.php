<?php
    include('../funciones.php');

    if (isset($_POST['submitQuery']) && isset($_POST['cod_dept']) && isset($_POST['office_name'])) {
        if(is_numeric($_POST['cod_dept'])) {
            $codDept = $_POST['cod_dept'];
            $oficio = strtoupper($_POST['office_name']);

            $conexion = mysqli_connect("localhost", "root", "", "base_de_datos_1") or die ("<h1>Error al conectar con la base de datos</h1>");
            
            $consulta = query($conexion, "SELECT emp_no, apellido, salario FROM emple WHERE dept_no = $codDept AND oficio = '$oficio'");
            
            if (mysqli_errno($conexion) != 0) {
                errorMessage($conexion);
            } else if (mysqli_num_rows($consulta) > 0) {
                $consultaDept = query($conexion, "SELECT dnombre FROM depart where dept_no = $codDept");
                $nombreDept = nameCode($consultaDept);
                echo "<h1>Listados de los empleados del departamento de $nombreDept con el oficio $oficio</h1>";
                drawTable($consulta, ['DNI', 'APELLIDO', 'SALARIO']);
                numRows($consulta, 'Número de empleados: ');
            } else {
                echo "<h1>NO EXISTEN EMPLEADOS EN EL DEPARTAMENTO: $codDept con el oficio de $oficio</h1>";
            }
            mysqli_close($conexion);
        } else {
            echo "<h1>FALLO EN LA CONSULTA, NO HAS METIDO UN Nº DE DEPARTAMENTO</h1>";
        }
        echo '<a href="formulario.html">Volver</a>';
    } else {
        header("Location: formulario.html");
    }
?>