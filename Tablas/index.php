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
    <table style="border-collapse: collapse; text-align: center">
        <?php
            $number = 1;
            define('TAM', 10);
            for($i = 0; $i < TAM; $i++) {
                echo "<tr>";
                for($j = 0; $j < TAM; $j++) {
                    echo "<td style='border: 1px solid black; padding: 2.5px'>$number</td>";
                    $number++;
                }
                echo "</tr>";
            }
        ?>
    </table></br>
    <table style="border-collapse: collapse; text-align: center">
        <?php
            $number = 1;
            for($i = 0; $i < TAM; $i++) {
                echo "<tr>";
                for($j = 0; $j < TAM; $j++) {
                    if ($i%2 == 0) {
                        echo "<td style='border: 1px solid black; padding: 2.5px'>$number</td>";
                    } else {
                        echo "<td style='border: 1px solid black; background-color: darkgray; padding: 2.5px'>$number</td>";
                    }
                    $number++;
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>