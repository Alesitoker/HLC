<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3</title>
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
        foreach ($arrayPersonas as $values) {
            echo "<tr>";
            foreach ($values as $value) {
                if ($values['country'] == 3) {
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