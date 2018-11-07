<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
</head>
<body>
    <?php
        $escondido = 'none';
        $resultado = ' ';
    ?>
    <h2>Calculadora</h2>
    <form action="calcular.php" method="post">
        <fieldset>
            <label>Coloque los valores</label>
            </br>
            <input type="number" id="number1" name="number1">
            </br>
            <input type="number" id="number2" name="number2">
            </br>
            <input type="number" id="number3" name="number3">
        </fieldset>
        <label>Seleccione operación</label>
        <select name="operaciones">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="Multiplicar">Multiplicar</option>
            <option value="Dividir">Dividir</option>
        </select>
        <input type="submit" value="Ver resultado">
    </form>
    <?php
        echo "<p style='display:$escondido'>$resultado</p>";
    ?>

</body>
</html>
<?php
    if (empty($_POST['number1']) && empty($_POST['number2']) && empty($_POST['number3'])) {
        $resultado = "Debes rellenar todos los campos";
    } else {
        switch ($_POST['operaciones']) {
            case 'suma':
                $resultado = "pollo";
                break;
            
            default:
                # code...
                break;
        }
    }
    echo "<p>$resultado</p>";
    $escondido = 'block';


?>