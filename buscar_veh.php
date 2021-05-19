<!Doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Busqueda coche</title>
	<meta name="description" content="">
	<meta name="author" content="Web">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
	<link rel="stylesheet" type="text/css" href="menu3.css">
</head>
<body>
<?php

$conexion= mysqli_connect("localhost", "root", "", "wallacar");
if($conexion)
    {
       
        $consulta= "SELECT * FROM wallacar";
        $resultado=mysqli_query($conexion, $consulta);

        if($resultado)
            {
                while($row= $resultado->fetch_array())
                    {
                    $id= $row['id']; 
                    $modelo= $row['modelo']; 
                    $km= $row['modelo']; 
                    $año= $row['modelo']; 
                    $precio= $row['modelo']; 
                    $cambio= $row['modelo']; 
                    $combustible= $row['combustible']; 
                    }

            }
    }

    ?>

    <!-- _______Featured Section ___________--> 
    <div class="allcontain">
        <div class="feturedsection">
            <h1 class="text-center"><span class="bdots">&bullet;</span>COCHES ENCOTRADOS SEGUN TU BUSQUEDA<span class="carstxt"></span>&bullet;</h1>
        </div>
        <div class="feturedimage">
            <div class="row firstrow">
                <div class="col-lg-6 costumcol colborder1">
                    <div class="row costumrow">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
                            <img src="images/coche5.jpeg" alt="audi">
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
                            <div class="featurecontant">
                                <h1><?php echo $modelo ?></h1>
                                <p><?php echo $año ?> <br> <?php echo $km ?> <br>
                                <?php echo $combustible ?><br><?php echo $cambio ?>  </p>
                                 <h2><?php echo $precio ?> &euro;</h2>
                                 <button href="contactar_usuario.html" id="btnRM" onclick="rmtxt()">CONTACTAR</button>
                                 
                            </div>
                        </div>
                    </div>
                </div>
