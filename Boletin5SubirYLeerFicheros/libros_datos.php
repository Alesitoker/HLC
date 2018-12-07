<?php
    if (file_exists('libros.txt')) {
        $file = fopen('libros.txt', 'rb');

        if (!$file) {
            echo '<p style="color: red">El fichero no se puede abrir</p>';
        } else {
            while(($cadena = fgets($file)) !== false) {
                echo '<span>'.$cadena.'</span>'.'</br>';
            }
            if (!$cadena) {
                echo '<p style="color: green">Datos leidos satisfactoriamente</p>';
            } else {
                echo '<p style="color: red">Ha ocurrido un error al leer el archivo</p>';
            }
        }
        
        fclose($file);
    } else {
        echo '<p style="color: red">El fichero no existe</p>';
    }
    echo '<a href="libros.html">Volver</a>';
?>