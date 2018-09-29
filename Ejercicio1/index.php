<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio1</title>
</head>
<body>
    <?php
        $edad = 33;
    ?>
    <div>
        <span>
            <?php
                for ($i = 0; $i <= 40; $i++) {
                    echo "*";
                }
            ?>
        </span>
        <br/><span style="margin: 15px">Cálculos para la edad de una persona</span><br/>
        <span>
            <?php
                for ($i = 0; $i <= 40; $i++) {
                    echo "*";
                }
            ?>
        </span>
    </div>
    <p>Para una persona de <?php echo $edad ?> años...</p>
    <p>Su edad en dias es: <?php echo 365*$edad ?></p>
    <p>Su edad en horas es: <?php echo 8760*$edad ?></p>
    <p>Su edad en minutos es: <?php echo 525600*$edad ?></p>
    <p>Su edad en segundos es: <?php echo 31536000*$edad ?></p>

</body>
</html>