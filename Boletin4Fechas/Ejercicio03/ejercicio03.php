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
        echo sprintf("<p>%s</p>", date('Y/m/d'));
        echo sprintf("<p>%s</p>", date('d.m.y'));
        echo sprintf("<p>%s</p>", date('d-m-y'));
    ?>
</body>
</html>