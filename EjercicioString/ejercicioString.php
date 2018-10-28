<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String magic</title>
</head>
<body>
    <?php
        include 'funciones.php';

        $cadena = "Hola me gusta decir hola";

        echo "<p>Cadena original: $cadena</p>";
        echo '<p>Cadena invertida: '.invertirCadena($cadena).'</p>';
        echo '<p>Usando la funcion strrev: '.strrev($cadena).'</p>';
        echo '<p>Otra forma: '.invertirCadena2($cadena).'</p>';
    ?>
</body>
</html>