<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fechas 2</title>
</head>
<body>
    <?php
        include '../funciones.php';
        $fecha = strftime("%d-%m", strtotime("19-02-2019"));
        echo diasQueFaltan($fecha);
    ?>
</body>
</html>