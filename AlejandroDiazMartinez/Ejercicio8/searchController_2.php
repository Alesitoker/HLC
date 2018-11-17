<?php
    include "../ejercicioPHP_formulario.php";

    if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['edad']) && isset($_POST['comparar'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $arrayBusqueda;
        
        if (!empty($nombre)) {
            if (is_numeric($edad)) {
                $arrayBusqueda = busquedaNombre($arrayPersonas, $nombre);

                if (!empty($apellido)) {
                    $arrayBusqueda = busquedaApellido($arrayBusqueda, $apellido);
                }
                // Solo se hace si se marca un pais como minimo.
                if (isset($_POST['paises'])) {
                    $arrayBusqueda = busquedaPais($arrayBusqueda, $_POST['paises']);
                }

                $arrayBusqueda = busquedaMayorQue($arrayBusqueda, $edad);
            } else {
                echo '<p style="color: red">El campo edad debe ser un numero y es requerido</p>';
            }
        } else {
            echo '<p style="color: red">El campo nombre es requerido no puede estar vacio</p>';
        }

        if (!empty($arrayBusqueda)) {
            echo '<table style="border-collapse: collapse">';
                dibujarCabecera($arrayPersonas);
                dibujarCuerpo($arrayBusqueda);
            echo '</table>';
        } else if (!empty($nombre) && is_numeric($edad)){
            echo '<h2>No existe nadie con esos datos</h2>';
        }
        
    }

    function busquedaNombre($arrayP, $nombre) {
        $arrayB = array();

        foreach ($arrayP as $key => $value) {
            if (strcasecmp($nombre, $value['firstname']) == 0) {
                $arrayB[$key] = $arrayP[$key];
            }
        }
        return $arrayB;
    }

    function busquedaApellido($arrayBusqueda, $apellido) {
        $arrayB = array();

        foreach($arrayBusqueda as $key => $value) {
            if (strcasecmp($apellido, $value['surname']) == 0) {
                $arrayB[$key] = $arrayBusqueda[$key];
            }
        }
        return $arrayB;
    }

    function busquedaMayorQue($arrayBusqueda, $edad) {
        $arrayB = array();

        foreach($arrayBusqueda as $key => $value) {
            switch ($_POST['comparar']) {
                case "MayorIgual":
                    if ($edad <= $value['age']) {
                        $arrayB[$key] = $arrayBusqueda[$key];
                    }
                    break;
                case 'MenorIgual':
                    if ($edad >= $value['age']) {
                        $arrayB[$key] = $arrayBusqueda[$key];
                    }
                break;
                case 'Igual':
                    if ($edad == $value['age']) {
                        $arrayB[$key] = $arrayBusqueda[$key];
                    }
                break;
            }
        }
        return $arrayB;
    }

    function busquedaPais($arrayBusqueda, $paises) {
        $arrayB = array();

        foreach($arrayBusqueda as $key => $value) {
            foreach ($paises as $pais) {
                if ($pais == $value['country']) {
                    $arrayB[$key] = $arrayBusqueda[$key];
                }
            }
        }
        return $arrayB;
    }

    // FUNCIONES dibujar tabla
    function dibujarCabecera($arrayP) {
        echo "<tr>";
            foreach (array_keys($arrayP[0]) as $key) {
                echo "<td style='border:1px solid black; padding: 5px; text-align: center'>";
                    echo $key;
                echo "</td>";
            }
        echo "</tr>";
    }

    function dibujarCuerpo($arrayP) {
        foreach ($arrayP as $values) {
            echo "<tr>";
                foreach ($values as $value) {
                    echo "<td style='border:1px solid black; padding: 5px; text-align: center'>";
                        echo $value;
                    echo "</td>";
                }
            echo "</tr>";
        }
    }
    
?>