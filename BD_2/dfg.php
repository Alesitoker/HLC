<?php
    if (isset($_POST['All'])) {
        $conexion = mysqli_connect("localhost", "root", "", "alumnos") or die ('No se ha podido conectar');

        $query = mysqli_query($conexion, "Select num_matricula, nombre, poblacion, nivel from alumnos a, cursos c where a.cod_curso = c.cod_curso");

        while ($fila = mysqli_fecth_array($query)) {

        }

    } else if (isset($_POST['consultar'])) {
        
    }
?>