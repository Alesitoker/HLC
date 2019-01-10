<link rel=stylesheet href=style/style.css>

<?php
    if (isset($_POST['All']) || isset($_POST['consultar'])) {
        $conexion = mysqli_connect("localhost", "root", "", "alumnos") or die ('No se ha podido conectar');
        if (isset($_POST['All'])) {
            
            $query = mysqli_query($conexion, "SELECT num_matricula, nombre, poblacion, nivel FROM alumnos a, cursos c WHERE a.cod_curso = c.cod_curso");

        } else if (isset($_POST['consultar'])) {
            $curso = $_POST['codcur'];

            $query = mysqli_query($conexion, "SELECT num_matricula, nombre, poblacion, nivel FROM alumnos a, cursos c WHERE a.cod_curso = c.cod_curso AND c.nivel = $curso");
        }

        if (mysqli_errno($conexion) != 0) {
            echo "<h1>ERROR AL REALIZAR LA CONSULTA, DEBE INTRODUCIR UN NUMERO</h1>";
            exit();
        } else if (mysqli_num_rows($query) > 0) {
            echo "<table>";
            echo "<tr>
                <th>CÓDIGO</th>
                <th>NOMBRE</th>
                <th>DIRECCIÓN</th>
                <th>CURSO</th>
            </tr>";
            while($fila = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td class='espacio'>$fila[num_matricula]</td>";
                echo "<td class='espacio'>$fila[nombre]</td>";
                echo "<td class='espacio'>$fila[poblacion]</td>";
                echo "<td class='espacio'>$fila[nivel]</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<hr>";
            echo "<h2 class='cant_empl'>Número de alumnos: ".mysqli_num_rows($query).'</h2>';
        } else {
            echo "<h1>NO EXISTEN ALUMNOS EN EL CURSO: $curso</h1>";
            exit();
        }
    } else {
        header('location: ejercicio2.html');
    }
?>