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

        $fecha = '11/11/2018';

        echo "La $fecha ha sido aumentada 5 dias</br>";
        echo sumarDias($fecha, 10).'</br>';
        echo "La $fecha ha sido aumentada 20 dias</br>";
        echo sumarDias($fecha, 20).'</br>';
        echo "La $fecha ha sido aumentada 30 dias</br>";
        echo sumarDias($fecha, 30).'</br></br>';
        echo "La $fecha ha sido disminuida 10 dias</br>";
        echo restarDias($fecha, 10).'</br>';
        echo "La $fecha ha sido disminuida 20 dias</br>";
        echo restarDias($fecha, 20).'</br>';
        echo "La $fecha ha sido disminuida 70 dias</br>";
        echo restarDias($fecha, 70).'</br>';
    ?>
</body>
</html>