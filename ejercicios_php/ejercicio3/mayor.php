<?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];

    // Hacemos la comparación del número mayor con condicionales anidados.
    if ($numero1 > $numero2 && $numero1 > $numero3) {
        echo $numero1 . ' es el mayor.<br>';
    } elseif ($numero2 > $numero1 && $numero2 > $numero3) {
        echo $numero2 . ' es el mayor.<br>';
    } elseif ($numero3 > $numero1 && $numero3 > $numero2) {
        echo $numero3 . ' es el mayor.<br>';
    }

    $maximo = max($numero1, $numero2, $numero3);

    echo $maximo . ' es el mayor mediante la funcion max().';

    echo "<br><br><a href='mayor.html'>Volver</a>";
?>