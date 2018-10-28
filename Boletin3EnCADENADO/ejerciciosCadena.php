<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Transformacion</title>
  </head>
  <body>
    <?php
      include 'funciones.php';

      $cadena = 'En un lugar de la mancha de cuyo nombre';
      $cadenaDividir = '082307';
      $cadenaEncontrar = 'cuyo';
      $url = 'www.example.com/public_html/index.php';
      $email = 'rayy@example.com';
      $compararCadena1 = 'football';
      $compararCadena2 = 'footboll';
      $longitud;
      $caracter1 = 'a';
      $caracter2 = 'z';
      $arrayCadena;
      $resultado;

      echo '<h2>Ejercicio 1</h2>';
      echo '<p><b>Transforma un cadena con todas sus letras en mayúsculas.</b></p>';
      echo sprintf("<p>%s</p>", strtoupper($cadena));
      echo '<p><b>Transforma un cadena con todas sus letras en minúsuclas.</b></p>';
      echo sprintf("<p>%s</p>", strtolower($cadena));
      echo '<p><b>Primera letra de la cadena en mayúsculas.</b></p>';
      echo sprintf("<p>%s</p>", ucfirst($cadena));
      echo '<p><b>Primera letra de cada palabra de mi cadena en mayúsculas.</b></p>';
      echo sprintf("<p>%s</p>", ucwords($cadena));

      echo '<h2>Ejercicio 2</h2>';
      echo "<p>Cadena de entrada: $cadenaDividir</p>";
      echo sprintf("<p>Salida: %s</p>", dividirCadena($cadenaDividir));

      echo '<h2>Ejercicio 3</h2>';
      $resultado = strpos($cadena, $cadenaEncontrar);
      if (!$resultado) {
        echo "<p>La cadena '$cadenaEncontrar' no se ha podido encontrar.</p>";
      } else {
        echo "<p>La cadena '$cadenaEncontrar' se encuentra en la cadena.</p>";
      }

      echo '<h2>Ejercicio 4</h2>';
      echo sprintf("<p>%s</p>", substr(strrchr($url, '/'),1));

      echo '<h2>Ejercicio 5</h2>';
      echo sprintf("<p>%s</p>", strstr($email, '@', true));

      echo '<h2>Ejercicio 6</h2>';
      echo sprintf("<p>%s</p>", substr($email, -3));

      echo '<h2>Ejercicio 7</h2>';
      echo sprintf("<p>%s</p>", generarPassword());

      echo '<h2>Ejercicio 8</h2>';
      echo sprintf("<p>%s</p>", str_replace('lugar', 'planeta', $cadena));

      echo '<h2>Ejercicio 9</h2>';
      echo caracterDiferente($compararCadena1, $compararCadena2);

      echo '<h2>Ejercicio 10</h2>';
      $arrayCadena = explode(', ', 'Uno, dos, tres, cuatro');
      echo '<pre>';
      print_r($arrayCadena);
      echo '<pre>';

      echo '<h2>Ejercicio 11</h2>';
      echo sprintf("<p>%s</p>", str_replace(strrchr($url, '.'), '', substr(strrchr($url, '/'), 1)));

      echo '<h2>Ejercicio 12</h2>';
      echo sprintf("<p>%c</p>", caracterSiguiente($caracter1));
      echo sprintf("<p>%c</p>", caracterSiguiente($caracter2));
    ?>
  </body>
</html>
