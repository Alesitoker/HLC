<?php
    function sumaImpares($numero) {
        $resultado = 0;
        if ($numero == 1) {
            $resultado += 1;
        } else if ($numero > 1){
            $resultado += (2*$numero-1) + sumaImpares($numero-1);
        }
        return $resultado;
    }
?>