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
</head>
<body>
<!-- Header -->
<br>
		<?php 
         include 'menu.html' ;
       ?>
<!--_____________ Carousel____________ -->
<div class="allcontain">
	<div id="carousel-up" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner " role="listbox">
			<div class="item active">
				
				<div class="carousel-caption">
					
				</div>
			</div>
		
		</div>
		<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
            <nav class="navbar navbar-default midle-nav">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed textcostume" data-toggle="collapse" data-target="#navbarmidle" aria-expanded="false">
						<h1>Buscador</h1>
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="navbarmidle">
				<div class="searchtxt">
					<h1>BUSCA TU COCHE IDEAL:</h1>
				</div>
				
                <form class="navbar-form navbar-left searchformmargin" role="search">
					<div class="form-group">
						<input type="text" class="form-control searchform" placeholder="Marca">
					</div>
				</form>
                <form class="navbar-form navbar-left searchformmargin" role="search">
					<div class="form-group">
						<input type="text" class="form-control searchform" placeholder="Modelo">
					</div>
				</form>
                <form class="navbar-form navbar-left searchformmargin" role="search">
					<div class="form-group">
						<input type="text" class="form-control searchform" placeholder="Kms">
					</div>
                
				</form>
                <form class="navbar-form navbar-left searchformmargin" role="search">
					<div class="form-group">
						<input type="text" class="form-control searchform" placeholder="Combustible">
					</div>
				</form>

				
			</div>
			
				
				</form>
					
	</div>
</div>
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
							<h1>AUDI RS7</h1>
							<p>Año 2018 <br> 108.000 kms <br>
								Gasolina<br> 5 puertas<br> 390 cv <br>Automático  </p>
			 				<h2>Precio:  54.490 &euro;</h2>
			 				<button id="btnRM" onclick="rmtxt()">CONTACTAR</button>
			 				
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 costumcol colborder2">
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img2colon">
						<img src="images/coche6.jpeg" alt="porsche1">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
						<div class="featurecontant">
							<h1>FERRARI 430</h1>
							<p>Año 2008 <br> 28.000 kms <br>
								Gasolina<br> 2 puertas<br> 490 cv <br>Automático </p>
			 				<h2>Precio: 100.000 &euro;</h2>
			 				<button id="btnRM2">CONTACTAR</button>
			 				
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



		<?php 
         include 'menu2.html' ;
       ?>
</body>
</html>