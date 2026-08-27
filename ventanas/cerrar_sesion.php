<?php
session_start();
session_unset();    // Elimina todas las variables de sesión
session_destroy();  // Destruye la sesión por completo

// Regresamos al index para verlo como usuario nuevo
header("Location: ../index.php");
exit();
?>