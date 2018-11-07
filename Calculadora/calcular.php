<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
    <style type="text/css">
        input {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
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
        <label>Selecciona operación</label>
        <select name="operaciones">
            <option value="Suma">Suma</option>
            <option value="Resta">Resta</option>
            <option value="Multiplicar">Multiplicar</option>
            <option value="Dividir">Dividir</option>
        </select>
        <input type="submit" value="Ver resultado">
    </form>
</body>
</html>
<?php
    if (isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['number3'])) {
        $num1 = $_POST['number1'];
        $num2 = $_POST['number2'];
        $num3 = $_POST['number3'];
        if (empty($num1) && empty($num2) && empty($num3)) {
            echo '<p>Debes rellenar todos los campos</p>';
        } else {
            switch ($_POST['operaciones']) {
                case 'Suma':
                    $resultado = $num1 + $num2 + $num3;
                    break;
                case 'Resta':
                    $resultado = $num1 - $num2 - $num3;
                    break;
                case 'Multiplicar':
                    $resultado = $num1 * $num2 * $num3;
                    break;
                case 'Dividir':
                    $resultado = $num1 / $num2 / $num3;
                    break;
            }
            echo "<p>Resultado:$resultado</p>";
        }
    }


?>