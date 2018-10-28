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
 ?>
