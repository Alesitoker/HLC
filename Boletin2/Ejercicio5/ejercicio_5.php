<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        include "../ejercicioPHP.php";
        include '../funciones.php';
    ?>
    <table>
        <?php
            $organizer;
            $contador = 0;

            dibujarCabecera($arrayPersonas);
            foreach ($arrayPersonas as $values) {
                foreach ($values as $key => $value) {
                    if ($key == 'age') {
                        $organizer[0][$contador] = $value;
                    } else if ($key == 'country') {
                        $organizer[1][$contador] = $value;
                    } else if ($key == 'firstname') {
                        $organizer[2][$contador] = $value;
                    } else if ($key == 'surname') {
                        $organizer[3][$contador] = $value;
                    }
                    $contador++;
                }
            }

            array_multisort($organizer[0], SORT_ASC, $organizer[1], SORT_ASC, $organizer[2], SORT_DESC, $organizer[3], SORT_DESC, $arrayPersonas);
        ?>
        <?php
        foreach ($arrayPersonas as $values) {
            echo "<tr>";
            foreach ($values as $value) {
                    echo "<td>";
                        echo $value;
                    echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <footer><p>copyright &copy; Alejandro Díaz Martínez</p></footer>
</body>
</html>