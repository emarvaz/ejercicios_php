<?php
    $numero = $_GET['numero'];

    switch ($numero) {
        case 1:
            echo "El " . $numero . " es lunes.";
            break;
        case 2:
            echo "El " . $numero . " es martes.";
            break;
        case 3:
            echo "El " . $numero . " es miercoles.";
            break;
        case 4:
            echo "El " . $numero . " es jueves.";
            break;
        case 5:
            echo "El " . $numero . " es viernes.";
            break; 
        case 6:
            echo "El " . $numero . " es sábado.";
            break; 
        case 7:
            echo "El " . $numero . " es domingo.";
            break;
        default:
            echo "Error, " . $numero . " no es un día de la semana.";
    }

    echo "<br><br><a href='dia.html'>Volver</a>"
?>