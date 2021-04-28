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