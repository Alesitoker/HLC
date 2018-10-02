<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tablas</title>
</head>
<body>
    <table>
        <?php
            $number = 1;
            for($i = 0; $i < 10; $i++) {
                echo "<tr>";
                for($j = 0; $j < 10; $j++) {
                    echo "<td style='border: 1px solid black; border-collapse: collapse'>$number</td>";
                    $number++;
                }
                echo "</tr>";
            }
        ?>
    </table></br>
    <table>
        <?php

        ?>
    </table>
</body>
</html>