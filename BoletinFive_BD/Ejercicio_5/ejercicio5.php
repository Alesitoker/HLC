<?php
    include('../funciones.php');

    if (isset($_POST['submitQuery'])) {
        if(isset($_POST['cod_dept']) && $_POST['cod_dept'] == 0 && empty($_POST['cod_dept']) && $_POST['cod_dept'] != '') {
            $codDept = $_POST['cod_dept'];

            $conexion = mysqli_connect("localhost", "root", "", "base_de_datos_1") or die ("<h1>Error al conectar con la base de datos</h1>");
            
            $consulta = query($conexion, "SELECT emp_no, apellido, salario FROM emple WHERE dept_no = $codDept");
            

            if (mysqli_errno($conexion) != 0) {
                errorMessage($conexion);
            } else if (mysqli_num_rows($consulta) > 0) {
                $consultaDept = query($conexion, "SELECT dnombre FROM depart where dept_no = $codDept");
                $nombreDept = nameCode($consultaDept);
                echo "<h1>Listados de los empleados del departamento de $nombreDept</h1>";
                drawTable($consulta, ['DNI', 'APELLIDO', 'SALARIO']);
                numRows($consulta, 'Número de empleados: ');
            } else {
                echo "<h1>NO EXISTEN EMPLEADOS EN EL DEPARTAMENTO: $codDept</h1>";
            }
        } else {
            echo "FALLO EN LA CONSULTA, NO HAS METIDO UN Nº DE DEPARTAMENTO";
        }
    } else {
        header("Location: formulario.html");
    }
?>