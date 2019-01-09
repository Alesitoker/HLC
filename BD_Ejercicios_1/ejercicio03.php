<link rel=stylesheet href=style/style.css>

<?php

    $conexion = mysqli_connect("localhost", "root", "", "base_de_datos_1");

    if (!$conexion) {
        echo 'No se ha podido esstablecer conexion con la base de datos';
    }

    $consulta = mysqli_query($conexion, "select * from depart");
    echo "<h2>LISTADOS DE LOS DEPARTAMENTOS</h2>";
    
    echo "<table>";
    echo "<tr class='center_txt'>
        <th>Numero</th>
        <th>Nombre</th>
        <th>Localidad</th>
    </tr>";
    while($fila = mysqli_fetch_array($consulta)) {
        echo "<tr>";
        echo "<td class='center_txt'>$fila[dept_no]</td>";
        echo "<td class='espacio'>$fila[dnombre]</td>";
        echo "<td class='espacio'>$fila[loc]</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<hr>";
    echo "<h2>Numero de departamentos: ".mysqli_num_rows($consulta).'</h2>';

    mysqli_close($conexion) or die ('No se pudo cerrar la conexion');
?>