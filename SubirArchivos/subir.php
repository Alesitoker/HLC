<?php
    if(is_uploaded_file($_FILES['archivo']['tmp_name'])) {
        echo "<p>Se ha subido correctamente</p>";
        if($_FILES['archivo']['size']< ((10*1024)*1024)) {
            echo '<p>El archivo no sobrepasa el tamaño maximo de 10MB</p>';
            if($_FILES['archivo']['type'] == "application/pdf") {
                echo "<p>La extension esta permitida</p>";
                
                $rand = rand(10000, 999999);
                $origen = $_FILES['archivo']['tmp_name'];
                $destino = 'uploads/'.$rand.$_FILES['archivo']['name'];
                move_uploaded_file($origen, $destino);
            } else {
                echo "Error de extension se esperaba un pdf";
            }
        } else {
            echo "Se esperaba un tamaño menor de 10MB";
        }
    } else {
        echo "Error el archivo no se ha subido";
    }
?>