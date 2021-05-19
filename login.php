<?php

include 'menu.html';

// Iniciar la sesion
session_start();
 
// Verifique si el usuario ya ha iniciado sesión, si es así, rediríjalo a la página de bienvenida
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: anuncia.view.php");
  exit;
}
 
// Incluir config.php
require_once "config.php";
 
// Definir variables e inicializar con valores vacíos
$username = $password = "";
$username_err = $password_err = "";
 
// Procesar los datos del formulario cuando se envía el formulario
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Comprobar si el nombre de usuario está vacío
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor ingrese su usuario.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Comprobar si la contraseña está vacía
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor ingrese su contraseña.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validar valores
    if(empty($username_err) && empty($password_err)){
        // Preparar declaracion
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Vincular variables a la declaración preparada como parámetros
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Establecer parámetros
            $param_username = $username;
            
            //Intentar ejecutar la declaración preparada
            if(mysqli_stmt_execute($stmt)){
                // Almacenar resultado
                mysqli_stmt_store_result($stmt);
                
                // Verifique si existe el nombre de usuario, si es así, verifique la contraseña
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Vincular variables del resultado
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // La contraseña es correcta, así que inicie una nueva sesión
                            session_start();
                            
                            // Almacenar datos en variables de sesión
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirigir a la usuario a la página de bienvenida
                            header("location: anuncia.view.php");
                        } else{
                            // Muestra un mensaje de error si la contraseña no es válida
                            $password_err = "La contraseña que has ingresado no es válida.";
                        }
                    }
                } else{
                    // Muestra un mensaje de error si el nombre de usuario no existe
                    $username_err = "No existe cuenta registrada con ese nombre de usuario.";
                }
            } else{
                echo "Algo salió mal, por favor vuelve a intentarlo.";
            }
        }
        
        // Declarar cierre
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
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <br><br><br><br><br><br><br><br><br><br><br><br>

    <div class="username1234" align="center">

    <h2 style="color: black">Iniciar sesión</h2>
        <p style="color: black">Por favor, complete sus credenciales para iniciar sesión.</p>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <div class="username1234 
                <?php 
                    echo (!empty($username_err)) ? 'has-error' : ''; 
                ?>
            ">

                <label style="color: black">Usuario</label>

                <input type="text" name="username" class="username1234" value="
                    <?php 
                        echo $username; 
                    ?>
                ">
                <span class="help-block">
                    <?php 
                        echo $username_err; 
                    ?>
                </span>

            </div>    

            <div class="username1234 <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label style="color: black">Contraseña</label>
                <input type="password" name="password" class="username1234">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>

            <div class="username1234">
                <input type="submit" class="btn btn-primary" value="Ingresar">
            </div>

            <p style="color: black">¿No tienes una cuenta? <a href="register.php">Regístrate ahora.</a></p>

        </form>
      

    </div>    

    <?php 
         include 'menu2.html' ;
       ?>
</body>
</html>