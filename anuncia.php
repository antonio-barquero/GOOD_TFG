<?php

if(!empty($_POST['submit']))
{

       $modelo= $_POST['modelo'];

      
       $km = $_POST['km'];
     
   
       $año = $_POST['año'];

       $precio = $_POST['precio'];
       $cambio= $_POST['cambio'];
       $combustible= $_POST['combustible'];
    
      
      
      
      
   


$conexion = new mysqli('localhost', 'root', '', 'wallacar');

$sql= "INSERT INTO coches( modelo, km, año, precio, cambio, combustible) VALUES ('$modelo', '$km','$año','$precio','$cambio', '$combustible')";


$conexion->query($sql);


   if($conexion-> affected_rows>=1)
       {
           echo "conectado";
       }
       else {
           echo "prueba otra vez";
   }
}
    
   require 'anuncia.view.php';  



   
?>