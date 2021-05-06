<!Doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Busqueda coche</title>
	<meta name="description" content="">
	<meta name="author" content="Web">

</head>
<body>
<!-- Header -->
<br>
		<?php 
         include 'menu.html' ;
       ?>

<!-- _______Featured Section ___________--> 
<div class="allcontain">
	<div class="feturedsection">
		<h1 class="text-center"><span class="bdots">&bullet;</span>OFERTAS COCHES DEPORTIVOS<span class="carstxt"></span>&bullet;</h1>
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


<br>
<br>

	
<!-- __________News Letter _______-->
	<div class="newslettercontent">
		<div class="leftside">
			
		</div>
		<div class="rightside">
			<BR><BR><BR><BR><BR><BR>
			<img class="newsimage" src="images/coche4.jpeg" alt="newsletter">
			
			
			<button >REGÍSTRATE</button>
			
		</div>
	</div>
	<?php 
         include 'menu2.html' ;
       ?>
</body>
</html>