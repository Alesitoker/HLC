<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>2</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    include '../ejercicioPHP.php';
    include '../funciones.php';
    ?>
    <table>
        <?php
            dibujarCabecera($arrayPersonas);
            $contador = 0;
            foreach ($arrayPersonas as $values) {
                $organizer[$contador] = $values['age'];
                $contador++;

            }
        array_multisort($organizer, SORT_DESC, $arrayPersonas);
        ?>
        <?php
        foreach ($arrayPersonas as $values) {
            echo "<tr>";
            foreach ($values as $value) {

                if ($values['age'] == min($organizer) || $values['age'] == max($organizer)) {
                    echo "<td>";
                        echo $value;
                    echo "</td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
    <footer><p>copyright &copy; Alejandro Díaz Martínez</p></footer>
</body>
</html>