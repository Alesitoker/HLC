<?php
    if (isset($_GET['archivo']) && !empty('archivo')) {
        $archivo = basename($_GET['archivo']);
        $ruta = 'uploads/'.$archivo;

        if (is_file($ruta)) {
            header("Content-Description: File Transfer");
            header('Content-Type: application/force-download');
            header('Content-Disposition: attachment; filename='.$archivo);
            header('Content-Transfer-Encoding: binary');
            header('Content-Length: '.filesize($ruta));
            
            readfile($ruta);
            // si hubiera html bajo el php es necesario porque intentaria pintar en el archivo.
            exit();
        } else {
            exit();
        }
    } else {
        exit();
    }
?>