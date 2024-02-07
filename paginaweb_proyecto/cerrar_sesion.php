<?php
    // Inicias la sesión si no está iniciada
    session_start();

    // Destruyes la sesión
    session_destroy();

    // Rediriges a la página de inicio de sesión
    header('Location: login.php');
    exit(); // Aseguras que el script se detenga después de redirigir
?>
