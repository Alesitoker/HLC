<?php
    function invertirCadena($cadena) {
        $cadenaInvertida = '';
        $contador = 0;
        while ($contador < strlen($cadena) - 1) {
            $contador++;
        }
        while ($contador >= 0) {
            $cadenaInvertida .= $cadena{$contador};
            $contador--;
        }
        return $cadenaInvertida;
    }

    function invertirCadena2($cadena) {
        $cadenaInvertida = '';
        for ($i = strlen($cadena)-1; $i >= 0; $i--) {
            $cadenaInvertida .= $cadena{$i};
        }
        return $cadenaInvertida;
    }
?>