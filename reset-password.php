<?php

include 'menu.html';

// Iniciar la sesion
session_start();
 
// Compruebe si el usuario ha iniciado sesión; de lo contrario, redirija a la página de inicio de sesión
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
// incluir config.php
require_once "config.php";
 
// Definir variables e inicializar con valores vacíos
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Procesar los datos del formulario cuando se envía el formulario
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validar nueva contraseña
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "La contraseña al menos debe tener 6 caracteres.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validar confirmar contraseña
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Por favor confirme la contraseña.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Las contraseñas no coinciden.";
        }
    }
        
    // Verificar los errores de entrada antes de actualizar la base de datos
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Preparar una variable de actualización
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Vincular variables a la declaración preparada como parámetros
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Establecer parámetros
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Intentar ejecutar la declaración preparada
            if(mysqli_stmt_execute($stmt)){
                // Contraseña actualizada exitosamente. Destruye la sesión y redirige a la página de inicio de sesión
                session_destroy();
                header("location: login.php");
                exit();
            } else{
                echo "Algo salió mal, por favor vuelva a intentarlo.";
            }
        }
        
        // Declaración de cierre
        mysqli_stmt_close($stmt);
    }
    
    // Cerrar conexion
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title style="color: black">Cambia tu contraseña aquí</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="username1234" align="center">
        <h2 style="color: black">Cambia tu contraseña aquí</h2>
        <p style="color: black">Complete este formulario para restablecer su contraseña.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="username1234 <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                <label style="color: black">Nueva contraseña</label>
                <input type="password" name="new_password" class="username1234" value="<?php echo $new_password; ?>">
                <span class="help-block"><?php echo $new_password_err; ?></span>
            </div>
            <div class="username1234 <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label style="color: black">Confirmar contraseña</label>
                <input type="password" name="confirm_password" class="username1234">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="username1234">
                <input type="submit" class="btn btn-primary" value="Enviar">
                <a class="btn btn-link" href="anuncia.php">Cancelar</a>
            </div>
        </form>
    </div>    
</body>
</html>