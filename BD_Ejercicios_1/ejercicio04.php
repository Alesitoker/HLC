<link rel=stylesheet href=style/style.css>

<?php

    $conexion = mysqli_connect("localhost", "root", "", "base_de_datos_1");

    $consulta = mysqli_query($conexion, "select apellido, oficio, salario from emple where dept_no = 20");
    echo "<h2>LISTADOS DE LOS EMPLEADOS DEL DEPARTAMENTO 20</h2>";
    
    echo "<table>";
    echo "<tr>
            <th>APELLIDO</th>
            <th>OFICIO</th>
            <th>SALARIO</th>
        </tr>";
    while($fila = mysqli_fetch_array($consulta)) {
        echo "<tr>";
        echo "<td class='espacio'>$fila[apellido]</td>";
        echo "<td class='espacio'>$fila[oficio]</td>";
        echo "<td class='espacio'>$fila[salario]</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<hr>";
    echo "<h2 class='cant_empl'>Numero de empleados: ".mysqli_num_rows($consulta).'</h2>';

    mysqli_close($conexion) or die ('No se pudo cerrar la conexion');
?>