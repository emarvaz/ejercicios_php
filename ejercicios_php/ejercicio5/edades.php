<?php
    $edad = $_POST["edad"];

    if ($edad < 0) {
        echo "Todavía no has nacido, espabila chaval.";
    } elseif ($edad < 12) {
        echo "Eres un infante.";
    } elseif ($edad >= 12 && $edad < 17) {
        echo "Eres un adolescente.";
    } elseif ($edad >= 18 && $edad < 60) {
        echo "Eres un adulto.";
    } elseif ($edad >= 60) {
        echo "Eres un anciano.";
    } else {
        echo "Error, la edad no es válida";
    }

    echo "<br><br><div><a href='edades.html'>Volver</a></div>";
?>