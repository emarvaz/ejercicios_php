<?php

    $distancia = $_POST['distancia'];
    $velocidad = $_POST['velocidad'];
    echo 'El viaje durara ' . $distancia / $velocidad . ' horas.';

    echo "<br><br><a href='viaje.html'>Volver</a>";
?>