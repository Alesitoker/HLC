<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 7</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        include "../ejercicioPHP.php";
    ?>
    <table>
        <tr>
            <?php
            foreach ($arrayPersonas as $values) {
                foreach ($values as $key => $value) {
                    echo "<td>";
                    echo $key;
                    echo "</td>";
                }
                break;
            }
            ?>
        </tr>
        <?php
        $organizer;
        $contador = 0;
        $menor;
        foreach ($arrayPersonas as $values) {
            foreach ($values as $key => $value) {
                if ($key == 'age') {
                    $organizer[$contador]['age'] = $value;
                } else if ($key == 'country') {
                    $organizer[$contador]['country'] = $value;
                }
            }
            $contador++;
        }
        array_multisort($organizer, SORT_ASC, $arrayPersonas);
        for ($i = 0; $i < count($organizer); $i++) {
            if ($i < count($organizer)-1 && $organizer[$i]['country'] == $organizer[$i+1]['country']) { // "$i < count($organizer)-1" para salir cuando es el ultimo y no pase nada malo.
                if ($organizer[$i]['age'] < $organizer[$i+1]['age']) {
                    $menor = $organizer[$i+1]['age'];
                }
            } else {
                foreach ($arrayPersonas as $values) {
                    echo "<tr>";
                    foreach ($values as $value) {
                        if ($values['country'] == $organizer[$i]['country'] && $values['age'] == $menor) {
                            echo "<td>";
                                echo $value;
                            echo "</td>";
                        }
                    }
                    echo "</tr>";
                }
            }
        }
        ?>
    </table>
    <footer><p>copyright &copy; Alejandro Díaz Martínez</p></footer>
</body>
</html>