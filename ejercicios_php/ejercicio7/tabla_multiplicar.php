<?php
    $numero = $_POST["numero"];
    echo "<h1>Tabla de multiplicar del $numero</h1>";
    echo "<ul>";

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<li>$numero x $i = $resultado</li>";
    }
    
    echo "</ul>";

    echo "<br><br><a href='tabla_multiplicar.html'>Volver</a>";
?>