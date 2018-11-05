<?php
    function diasQueFaltan($fecha) {
        $year = (idate("Y")+1);
        $fecha1 = date_create(date('d-m-Y', strtotime("$fecha-$year")));
        $fecha2 = date_create(date('d-m-Y'));
        
        return numDias($fecha1, $fecha2);
    }

    function diasEntreFechas($fechaInicio, $fechaFin) {
        $fecha1 = date_create(date('d-m-Y', strtotime("$fechaInicio")));
        $fecha2 = date_create(date('d-m-Y', strtotime($fechaFin)));

        return numDias($fecha1, $fecha2);
    }

    function numDias($fecha1, $fecha2) {
        $dias = date_diff($fecha1, $fecha2)->format("%a ");

        return $dias .= $dias == 1?'dia':'dias ';
    }

    function primerDia($fecha) {
        $fecha1 = date_create(date('d-m-Y', strtotime("$fecha")));
        $fecha1->modify('first day of this month');

        return $fecha1->format('d');
    }

    function ultimoDia($fecha) {
        $fecha1 = date_create(date('d-m-Y', strtotime("$fecha")));
        $fecha1->modify('last day of this month');

        return $fecha1->format('d');
    }

    function tiempoEntreFechas($fechaInicio, $fechaFin) {
        $fecha1 = date_create(date("d-m-Y", strtotime($fechaInicio)));
        $fecha2 = date_create(date("d-m-Y", strtotime($fechaFin)));
        $fecha = date_diff($fecha1, $fecha2);
        $tiempoFecha = '';
        

        //dias
        $tiempoFecha = $fecha->d;
        $tiempoFecha .= $fecha->d == 1?' día, ':' días, ';
        //meses
        $tiempoFecha .= $fecha->m;
        $tiempoFecha .= $fecha->m == 1?' mes, ':' meses, ';
        //años
        $tiempoFecha .= $fecha->y;
        $tiempoFecha .= $fecha->y == 1?' año':' años';
        
        return $tiempoFecha;
    }

    function fechaEnMilisegundos($fecha) {
        return strtotime($fecha)*1000;
    }

    function diaNombre($fecha) {
        $fecha1 = date_create($fecha);
        $cadeFecha = '';

        $cadenaFecha = $fecha1->format('l');
        $cadenaFecha .= ' the ';
        $cadenaFecha .= $fecha1->format('jS');
        return $cadenaFecha;
    }

    function validarFecha($fecha) {
        $fechaDividida = explode('-', $fecha);
        $mes = 1;
        $dia = 0;
        $año = 2;

        if (count($fechaDividida) == 3 && checkdate($fechaDividida[1], $fechaDividida[0], $fechaDividida[2])) {
            return true;
        }
        return false;
    }

    function cambioMesANombre($fecha) {
        return date('d/F/Y', strtotime($fecha));
    }

    function fechaHoraMadrid() {
        date_default_timezone_set('Europe/Madrid');
        return date('d-m-Y H:i:s e');
    }

    function esFinDeSemana($fecha) {
        $dia = date('N', strtotime($fecha));
        if ($dia == 0 || $dia == 6) {
            return true;
        }
        return false;
    }

    function sumarDias($fecha, $cantidad) {
        $nuevaFecha = strtotime("+$cantidad day", strtotime($fecha));
        return date('d-m-Y', $nuevaFecha);
    }

    function restarDias($fecha, $cantidad) {
        $nuevaFecha = strtotime("-$cantidad day", strtotime($fecha));
        return date('d-m-Y', $nuevaFecha);
    }

    function aumentarUnMes($fecha) {
        $nuevaFecha = strtotime("+1 month", strtotime($fecha));

        return date('d-m-Y', $nuevaFecha);
    }
?>