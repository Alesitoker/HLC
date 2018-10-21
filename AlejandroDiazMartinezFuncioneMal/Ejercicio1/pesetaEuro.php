<?php
    function pesetaEuro($monedita, $convertir = "PESETA") {
        $PESETA = 166.386;
        $EURO = 0.006;
        strtoupper($convertir);
        switch ($convertir) {
            case "EURO":
                $conversion = $EURO;
                break;
            case "PESETA":
                $conversion = $PESETA;
                break;
        }
        return $monedita * $conversion;
    }
?>