<?php
// Iniciar la sesion
session_start();
 
// Desarmar todas las variables de sesión
$_SESSION = array();
 
// Destruir la sesión
session_destroy();
 
// Redirigir a la pagina de login(login.php)
header("location: login.php");
exit;
?>