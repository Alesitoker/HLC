<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fin de semana</title>
</head>
<body>
    <?php
        include '../funciones.php';

        $fecha1 = '05-11-2018';
        $fecha2 = '03-11-2018';

        printf('<p>%s %s fin de semana</p>', $fecha1, esfinDeSemana($fecha1)?'es':'no es');
        printf('<p>%s %s fin de semana</p>', $fecha2, esfinDeSemana($fecha2)?'es':'no es');
        
    ?>
</body>
</html>