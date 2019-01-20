<link rel=stylesheet href=../style/style.css>

<?php
    include("../funciones.php");

    $conexion = mysqli_connect("localhost", "root", "", "base_de_datos_1") or die ("<h1>Error al conectar con la base de datos</h1>");
    
    $consulta = query($conexion, "SELECT apellido, oficio, dept_no, salario FROM emple ORDER BY 4");
    

    if (mysqli_errno($conexion) != 0) {
        errorMessage($conexion);
    } else if (mysqli_num_rows($consulta) > 0) {
        echo "<h1>LISTADO DE LOS EMPLEADOS</h1>";
        echo '<hr>';
        drawTable($consulta, ['Apellido', 'Oficio', 'Departamento', 'Salario']);
        numRows($consulta, 'Número de empleados: ');
    } else {
        echo '<h1>NO HAY EMPLEADOS</h1>';
    }
?>