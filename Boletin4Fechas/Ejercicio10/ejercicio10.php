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

        $fechaValida = '28-02-2018';
        $fechaInvalida = '29-02-2018';
        
        printf("La fecha $fechaValida es %s</br>", validarFecha($fechaValida)?'valida':'invalida');
        printf("La fecha $fechaInvalida es %s</br>", validarFecha($fechaInvalida)?'valida':'invalida');
    ?>
</body>
</html>