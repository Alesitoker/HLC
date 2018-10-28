<?php
    function dibujarCabecera($arrayPersonas) {
        echo "<tr>";
            foreach (array_keys($arrayPersonas[0]) as $key) {
                echo "<td>";
                    echo $key;
                echo "</td>";
            }
        echo "</tr>";
    }
    function dibujarCuerpo($arrayPersonas) {
        foreach ($arrayPersonas as $values) {
            echo "<tr>";
                foreach ($values as $value) {
                    echo "<td>";
                        echo $value;
                    echo "</td>";
                }
            echo "</tr>";
        }
    }

    function dibujarCasilla($valor, $condicion = true) {
        if ($condicion) {
            echo "<td>";
                echo $valor;
            echo "</td>";
        }
    }
    
?>