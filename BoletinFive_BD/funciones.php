<link rel=stylesheet href=../style/style.css>

<?php
    function drawHeader($headerTitles) {
        echo "<tr>";
        for ($i = 0; $i < count($headerTitles); $i++) {
            echo "<th>".$headerTitles[$i]."</th>";
        }
        echo "</tr>";
    }

    function drawBody($consulta) {
        while($fila = mysqli_fetch_array($consulta)) {
            echo "<tr>";
            // Dividimos el numero de elementos del array por que se pueden acceder a el por dos claves distintas.
            for ($i = 0; $i < count($fila)/2; $i++) {
                echo '<td>'.utf8_decode($fila[$i]).'</td>';
            }
            echo "</tr>";
        }
    }

    function drawTable($consulta, $headerTitles) {
        echo "<table>";
            drawHeader($headerTitles);
            drawBody($consulta);
        echo "</table>";
    }

    function numRows($consulta, $message) {
        echo '<hr>';
        echo "<h2>$message".mysqli_num_rows($consulta).'</h2>';
    }

    function errorMessage($conexion) {
        echo "<h1>Error nº: ".mysqli_errno($conexion)."</h1>";
        echo "<h2>".mysqli_error($conexion)."</h2>";
    }

    function query($conexion, $query) {
        mysqli_query($conexion, "$query");
    }
?>