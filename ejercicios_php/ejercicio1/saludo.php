<?php
    echo '¡Hola ' . htmlspecialchars($_POST['nombre']) . " " . htmlspecialchars($_POST['apellidos']) . '!';

    echo "<br><br><a href='saludo.html'>Volver</a>";
?>