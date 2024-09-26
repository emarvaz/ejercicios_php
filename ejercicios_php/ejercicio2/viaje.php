<?php

    $distancia = $_GET['distancia'];
    $velocidad = $_GET['velocidad'];
    echo 'El viaje durara ' . $distancia / $velocidad . ' horas.';

    echo "<br><br><a href='viaje.html'>Volver</a>"
?>