<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
        include '../funciones.php';
        $fecha = '19-02-2019';

        echo sprintf('<p>El primer dia: %s</p>', primerDia($fecha));
        echo sprintf('<p>El ultimo dia: %s</p>', ultimoDia($fecha));
    ?>
</body>

</html>