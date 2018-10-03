<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array2</title>
</head>
<body>
    <?php
        $coche = array("marca" => "seat", "modelo" => "ibiza", "color" => "blanco", "combustible" => "gasolina");
        $otro;
        $marca;
        $modelo;
        $color;
        $combustible;

        foreach ($coche as $clave => $valor) {
            switch ($clave) {
                case "color":
                    $otro[0] = $valor;
                    break;
                case "marca":
                    $otro[1] = $valor;
                    break;
                case "modelo":
                    $otro[2] = $valor;
                    break;
                case "combustible":
                    $otro[3] = $valor;
                    break;
            }
        }
        foreach ($coche as $clave => $valor) {
            switch ($clave) {
                case "color":
                    $color = $valor;
                    break;
                case "marca":
                    $marca = $valor;
                    break;
                case "modelo":
                    $modelo = $valor;
                    break;
                case "combustible":
                    $combustible = $valor;
                    break;
            }
        }
        echo "<p>El coche de color <b>$color</b> de la marca <b>$marca</b>, modelo <b>$modelo</b> consume <b>$combustible</b><p/>";
        printf("<p>El coche de color <b>%1\$s</b> de la marca <b>%2\$s</b>, modelo <b>%3\$s</b> consume <b>%4\$s</b><p/>", $otro[0], $otro[1], $otro[2], $otro[3]);
    ?>
</body>
</html>