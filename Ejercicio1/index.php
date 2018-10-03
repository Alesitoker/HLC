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
        const EDAD = 33;
        define("DIAS_AÑO", 365);
        define("HORAS_AÑO", 8760);
        const MINUTOS_AÑO = 525600;
        const  SEGUNDOS_AÑO = 31536000;
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
        </span><br/>

        <p>Para una persona de <?php echo EDAD ?> años...</p>
        <p>Su edad en dias es: <?php echo DIAS_AÑO*EDAD ?></p>
        <p>Su edad en horas es: <?php echo HORAS_AÑO*EDAD ?></p>
        <p>Su edad en minutos es: <?php echo MINUTOS_AÑO*EDAD ?></p>
        <p>Su edad en segundos es: <?php echo SEGUNDOS_AÑO*EDAD ?></p>
    </div>
</body>
</html>