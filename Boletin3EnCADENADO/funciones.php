<?php
  function dividirCadena($cadena) {
    $dividido = '';
    for ($i = 0; $i < strlen($cadena); $i++) {
      if ($i > 0 && $i%2 == 0) {
        $dividido.=':';
      }
       $dividido .= $cadena{$i};
    }
    return $dividido;
  }
  function generarPassword() {
    $cadenaDeGeneracion = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    $longitud = 8;
    $passw = '';
    for ($i = 0; $i < $longitud; $i++) {
        $passw .= str_shuffle($cadenaDeGeneracion){0};
    }
    return $passw;
  }
  function caracterDiferente($cadena1, $cadena2) {
    for ($i = 0; $i < strlen($cadena1) && $i < strlen($cadena2); $i++) {
        if ($cadena1{$i} != $cadena2{$i}) {
            return sprintf('La primera diferencia entre las dos cadenas está en la posición %d: "%s" <> "%s"', $i, $cadena1{$i}, $cadena2{$i});
        }
    }
    return 'No hay diferencias en las cadenas';
  }
  function caracterSiguiente($caracter) {
    $obtenerA = 25;
    $obtenerO = 130;
    $obtenerNConTilde = 131;
    $resultado;
    if ($caracter == 'z' || $caracter == 'Z') {
      $resultado = ord($caracter)-$obtenerA;
    } else if ($caracter == 'ñ' || $caracter == 'Ñ') {
        $resultado = ord($caracter)-$obtenerO;
    } else if ($caracter == 'n' || $caracter == 'N') {
      $resultado = ord($caracter)-$obtenerNConTilde;
    } else {
      $resultado = ord($caracter)+1;
    }
    return $resultado;
  }

  function introducirCadena($cadenaAñadir, $cadena, $posicion) {
    if ($posicion < strlen($cadena)) {
      $trozo1 = substr($cadena, 0, $posicion);
      $trozo2 = substr($cadena, $posicion);

      if (strripos($trozo1, ' ') == strlen($trozo1)-1) {
         $cadenaAñadir .= ' ';
      } else if (strpos($trozo2, ' ') == 0) {
        $cadenaAñadir = ' '.$cadenaAñadir;
      }
      return $trozo1.$cadenaAñadir.$trozo2;
    } else {
      return $cadenaAñadir;
    }
  }

  function borrarCadena($cadena, $cadenaBorra) {
    return str_replace($cadenaBorra, '',$cadena);
  }

  function primerasCincoPalabras($cadena) {
    $position = contarPalabras($cadena, 5);
    return substr($cadena, 0, $position);
  }

  function contarPalabras($cadena, $cantidadEspacios) {
    $numEspacios = 0;
    $contador = 0;
    do {
      if ($cadena{$contador} == ' ') {
        $numEspacios++;
      }
      $contador++;
    } while ($contador < strlen($cadena) && $numEspacios != $cantidadEspacios);
    return $contador;
  }
 ?>
