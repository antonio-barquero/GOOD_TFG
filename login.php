<?php

    if (isset($_POST['submit']))
    {
        $nombre= $_POST['nombre'];
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];
       
        echo "rellenados";
    


$conexion = new mysqli('localhost', 'root', '', 'wallacar');

$sql= "INSERT INTO usuarios (nombre, email, contraseña ) VALUES ('$nombre', '$email','$contraseña')";

$conexion->query($sql);

    if($conexion-> affected_rows>=1)
        {
            echo "conectado";
        }
        else {
            echo "prueba otra vez";
    }

      require 'login.view.php';     
      
      
    }

?>