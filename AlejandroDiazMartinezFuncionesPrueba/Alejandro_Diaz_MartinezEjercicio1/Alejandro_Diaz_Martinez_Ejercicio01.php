<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alejandro Diaz Martinez Ejercicio 1</title>
</head>
<body>
    <?php
        include "pesetaEuro.php";
        $euro = 300;
        $peseta = 323442;
        $cambioDeEuro = pesetaEuro($euro);
        $cambioDePeseta = pesetaEuro($peseta, "EURO");
        $asteriskos = "";

        for ($i = 0; $i < 25; $i++) {
            $asteriskos .= "*";
        }

        echo "<p>$asteriskos</p>";
        echo "<p style='margin-left: 25px'>Conversor €/ptas.</p>";
        echo "<p>$asteriskos</p>";

        printf("La cantidad de %d€ son %.2f pesetas", $euro, $cambioDeEuro);
        echo "</br>";
        printf("La cantidad de %d pesetas son %.2f€", $peseta, $cambioDePeseta);
    ?>
    <footer style="text-align: end;"><p>copyright &copy; Alejandro Díaz Martínez</p></footer>
</body>
</html>