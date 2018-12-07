<?php
    if (isset($_POST['title']) && isset($_POST['tipo']) && isset($_POST['obser'])) {
        $title = $_POST['title'];
        $tipo = $_POST['tipo'];
        $observaciones = $_POST['obser'];
        $separador = "";

        if (!empty($title) && ($tipo == 0 || $tipo == 1)) {
            if (file_exists("libros.txt")) {
                $separador = sprintf("%'-40s\n", "");
            }
            $file = fopen('./libros.txt', 'a+b');

            if (!$file) {
                echo '<p style="color: red">El fichero no se puede abrir</p>';
            } else {
                switch ($tipo) {
                    case '0':
                        $tipo = 'Ejemplar';
                        break;
                    case '1':
                        $tipo = 'Colección';
                        break;
                }

                $long = fprintf($file, "%sTitulo: %s\nTipo: %s\nObservaciones: %s\n", $separador, $title, $tipo, $observaciones);
                if (!$long) {
                    echo '<p>Ha ocurrido un error</p>';
                } else {
                    echo '<p style="color: green">Datos guardados satisfactoriamente</p>';
                }
            }
            fclose($file);
        } else {
            echo '<p style="color: red">El campo titulo es obligatorio</p>';
        }
        echo '<a href="libros.html">Volver</a>';
    }
?>