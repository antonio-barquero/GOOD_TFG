<!Doctype html>
<html>
<head>
  <meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<?php 
         include 'menu.html' ;
       ?>
       <br><br><br><br>
	
<link href="login.css" rel="stylesheet">

<div class="testbox">
  <h1>Registration</h1>

  <form action="/">
      <hr>
    <div class="accounttype">
      <input type="radio" value="None" id="radioOne" name="account" checked/>
      <label for="radioOne" class="radio" chec>Personal</label>
      <input type="radio" value="None" id="radioTwo" name="account" />
      <label for="radioTwo" class="radio">Concesionario</label>
      
    </div>
  <hr>
  <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="text" name="name" id="name" placeholder="Email" required/>
  <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="name" id="name" placeholder="Nombre" required/>
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="password" name="name" id="name" placeholder="Contraseña" required/>
  
   <p>By clicking Register, you agree on our <a href="#">terms and condition</a>.</p>
   <a href="#" class="button">Registro</a>
  </form>
</div>

<?php 
         include 'menu2.html' ;
       ?>
  </body>

  </html>
  
 
<?php

/*
if (isset($_POST['login'])) {
  session_start();
  header('Location: http://localhost/xexu/practica5/login.view.php');
}

// Comprobamos que el formulario haya sido enviado con las variables que hayamos puesto en index.view, deben llamarse igual!
if (isset($_POST['submit'])) {
 $Nombre = $_POST['Nombre'];
 //$Apellido = $_POST['Apellido'];
 $Email = $_POST['Email'];
    $Contrasena = $_POST['Contrasena'];
    //$password_hash = password_hash($contrasena, PASSWORD_BCRYPT);
    //$Telefono = $_POST['Telefono'];
    //$Fecha_Nac = $_POST['Fecha_Nac'];
    //$Telefono=intval($Telefono);

  

   // $query = $connection->prepare("SELECT * FROM prueba_datos WHERE EMAIL=:Email");
   // $query->bindParam("Email", $Email, PDO::PARAM_STR);
   // $query->execute();

   // if ($query->rowCount() > 0) {
   //     echo '<p class="error">The email address is already registered!</p>';
   // }

   // if ($query->rowCount() == 0) {
   //     $query = $connection->prepare("INSERT INTO users(USERNAME,PASSWORD,EMAIL) VALUES (:username,:password_hash,:email)");
   //     $query->bindParam("username", $username, PDO::PARAM_STR);
   //     $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
   //     $query->bindParam("email", $email, PDO::PARAM_STR);
   //     $result = $query->execute();

   //     if ($result) {
   //         echo '<p class="success">Your registration was successful!</p>';
   //     } else {
   //         echo '<p class="error">Something went wrong!</p>';
   //     }
   // }
 //Conexion a la base de datos
    $conexion = new mysqli('localhost', 'root', '', 'usuarios');


    //Nombre
    $sql1 = "SELECT Nombre FROM prueba_datos";
    $connect = $conexion->query($sql1);

    if (!empty($Nombre)) { //podemos combrobar con el apellido también

   $Nombre = filter_var($Nombre, FILTER_SANITIZE_STRING);//limpia o verifica que es un texto
   
 } else {
   $errores .= 'Por favor ingresa un nombre <br />';
   $enviado=false;
 }
 if($connect->num_rows){
 while($fila = $connect->fetch_assoc()){
       if($fila['Nombre']==$Nombre){
       //echo  "Hola ".$fila['Nombre']. '<br />';
       
       //aquí podemos hacer un require o un include de otra página donde el usuario pueda hacer cosas.
       //O redirigirle a la página de Login
       }
     }
 }else {
     echo 'No hay datos en la base de datos';
   }

 //Email
 $sql2 = "SELECT Email FROM prueba_datos";
 $connect = $conexion->query($sql2);
 if (!empty($Email)) { //comprobamos que es un email válido y que lo ha enviado
   $Email = filter_var($Email, FILTER_SANITIZE_EMAIL);

   if (!filter_var($Email, FILTER_VALIDATE_EMAIL)){
     $errores .= 'Por favor ingresa un correo valido <br />';
     $enviado=false;
   } 
 } 
 if($connect->num_rows){ //Con este condicional vamos a comprobar que hay datos en la base de datos
 while($fila = $connect->fetch_assoc()){
       if($fila['Email']==$Email){

       //echo 'Correo Valido<br />'; //$fila['Contrasena'] . 
       //aquí podemos hacer un require o un include de otra página donde el usuario pueda hacer cosas.
       //O redirigirle a la página de Login
       }
     }
 }else {
   echo 'No hay datos en la base de datos';
 }

 //Contraseña
 $sql3 = "SELECT Contrasena FROM prueba_datos"; //Traemos los elementos de la base de datos
 $connect = $conexion->query($sql3); //La conexión se ejecuta
 
   if($connect->num_rows){ //Con este condicional vamos a comprobar que hay datos en la base de datos
   //El método fetch_assoc trae la información del elemento de cada fila que queramos
   while($fila = $connect->fetch_assoc()){
       if($fila['Contrasena']==$Contrasena){
       //echo 'Contraseña Valida<br />'; //$fila['Contrasena'] . 
       //aquí podemos hacer un require o un include de otra página donde el usuario pueda hacer cosas.
       //O redirigirle a la página de Login
       }
     }	
   }
   else {
     echo 'No hay datos en la base de datos';
   }

 
 if($errores=''){

 }
 else{ //si todo ok

   if ($conexion->connect_errno){
     die('Lo siento hubo un problema con el servidor');
   } 
   else {
     //$sql = "INSERT INTO prueba_datos (Id,Nombre,Apellidos,Email,Contrasena,Telefono,Fecha_Nac) VALUES (null,'$Nombre','$Apellido','$Email','$Contrasena','$Telefono','Fecha_Nac')";

     $conexion->query($sql1);
      //Hacemos un query a la base de datos
     
     if($conexion->affected_rows >= 1){  //si todo va bien saluda al usuario
         echo 'Hola, ' . $Nombre  . ',Has Iniciado Sesion' . '</br>';
         //include 'funciones.php';

       }
     
   }
 }
}
$errores = '';
$enviado=true;

require 'login.view.php'; //llamamos a la web en html


?>*/
