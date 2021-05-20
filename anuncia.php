<?php

    $prueba=true;

       $modelo= $_POST['modelo'];
       $km = $_POST['km'];
       $año = $_POST['año'];
       $precio = $_POST['precio'];
       $cambio= $_POST['cambio'];
       $combustible= $_POST['combustible'];

       $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
       
       
   
       
    

       if($año>2021)
     {
echo "es imposible";
$prueba=false;

     }
    
     if($prueba==true){
         
$conexion = new mysqli('localhost', 'root', '', 'wallacar');

$sql= "INSERT INTO coches( modelo, km, año, precio, cambio, combustible, imagen) VALUES ('$modelo', '$km','$año','$precio','$cambio', '$combustible','$imagen')";


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



   


