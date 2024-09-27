<?php
    $numero = $_POST["numero"];
    $suma = 0;

    for ($i = 1; $i <= $numero; $i++) {
        $suma += $i;
    }

    // Aquí descubri que no hace falta concatenar las variables, ya que con las comillas dobles las detecta.
    echo "La suma de todos los números hasta $numero es: $suma";

    echo "<br><br><a href='suma_acumulativa.html'>Volver</a>";
?>