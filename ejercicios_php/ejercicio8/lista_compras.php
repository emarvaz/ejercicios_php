<?php
    $producto = $_POST["producto"];
    $lista_compras = explode(",", $producto);

    for ($i = 0; $i < count($lista_compras); $i++) {
        echo "$i: ";
        echo $lista_compras[$i];
        echo "<br>";
    }

    echo "<br><br><a href='lista_compras.html'>Volver</a>";
?>