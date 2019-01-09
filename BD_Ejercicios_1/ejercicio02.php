<?php
    /*
    Ejercicio 2: Realiza un script PHP que consulte los datos: APELLIDO, OFICIO
    y SALARIO de los empleados de la tabla EMPLEADOS del departamento 20,
    visualizando al final el número de empleados recuperados.
    */

    $conexion = mysqli_connect("localhost", "root", "", "base_de_datos_1");

    if (!$conexion) {
        echo 'No se ha podido esstablecer conexion con la base de datos';
    }

    $consulta = mysqli_query($conexion, "select apellido, oficio, salario from emple where dept_no = 20");

    while($fila = mysqli_fetch_array($consulta)) {
        echo '<hr>';
        echo 'Apellido: '.$fila['apellido'];
        echo '<br/>Oficio: '.$fila['oficio'];
        echo '<br/>Salario: '.$fila['salario'];
    }
    echo '<hr>';
    echo '<b>Número de empleados en el departamento 20: </b>'.mysqli_num_rows($consulta);

    mysqli_close($conexion) or die ('No se pudo cerrar la conexion');
?>