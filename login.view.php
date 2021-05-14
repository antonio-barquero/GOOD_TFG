<!Doctype html>
<html>
  <head>
    <meta charset="UTF-8">
	  <title>Login Wallacar</title>
	  
    <link href="login.css" rel="stylesheet" type="text/css">
  

  </head>
  <body>
    <br>
      <?php 
         include 'menu.html' ;
       ?>
       <br><br><br><br>
   

       <p class="texto" >REGISTRO</p>
        <div class="Registro">
          <form action="login.php" method="POST" >

            <input type="text" required placeholder="Nombre de usuario" name="nombre" > 
            <input type="text" name="email" required placeholder="Correo" >
            <input type="password" name="contraseña" required placeholder="Contraseña" > 
            <input type="submit" value="Registrar" title="Registra tu cuenta">
          </form>
        </div> 
      





   </body>
        <?php 
         include 'menu2.html' ;
       ?>
  

 </html>