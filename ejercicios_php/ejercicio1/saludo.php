<?php
    echo '¡Hola ' . htmlspecialchars($_GET['nombre']) . " " . htmlspecialchars($_GET['apellidos']) . '!';

    echo "<br><br><a href='saludo.html'>Volver</a>"
?>