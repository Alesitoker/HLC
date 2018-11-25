<?php
    if (isset($_POST['archivo']) && !empty('archivo')) {
        $archivo = basename($_POST['archivo']);
        $ruta = 'uploads/'.$archivo;
        
        if (is_file($ruta)) {
            header("Content-Description: File Transfer");
            header('Content-Type: application/force-download');
            header('Content-Disposition: attachment; filename='.$archivo);
            header('Content-Transfer-Encoding: binary');
            header('Content-Length: '.filesize($ruta));
            
            readfile($ruta);
            // Es necesario porque hay html bajo el php.
            exit();
        } else {
            echo "No puede ser descargado";
        }
    }
?>

<form action="downloadPost.php" method="POST">
    <label>Descargar:</label>
    <select name="archivo">
        <option value="BoletinFicheros.pdf">BoletinFicheros.pdf</option>
        <option value="Sax.pdf">Sax.pdf</option>
    </select>
    <input type="submit" name="submit">
</form>