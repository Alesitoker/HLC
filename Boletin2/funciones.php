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
    
?>