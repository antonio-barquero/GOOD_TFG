<?php

    $prueba=true;

       $modelo= $_POST['modelo'];
       $km = $_POST['km'];
       $año = $_POST['año'];
       $precio = $_POST['precio'];
       $cambio= $_POST['cambio'];
       $combustible= $_POST['combustible'];

     
   

       if($año>2021)
     {
echo "es imposible";
$prueba=false;

     }
    
     if($prueba==true){
         
$conexion = new mysqli('localhost', 'root', '', 'wallacar');

$sql= "INSERT INTO coches( modelo, km, año, precio, cambio, combustible) VALUES ('$modelo', '$km','$año','$precio','$cambio', '$combustible')";


$conexion->query($sql);



   if($conexion-> affected_rows>=1)
       {
           echo "Vehiculo bien introducido";
       }
       else {
        
           echo "prueba otra vez";
   }

}
   require 'anuncia.view.php';  
   ?>



   


