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
    

       <p class="texto">LOGIN</p>
       <div class="caja">
            <div class="Registro">
                <form method="post" action="">

                    <input type="text" required placeholder="Nombre de usuario" autocomplete="off"> 
                    <input type="password" name="password" id="password" required placeholder="Contraseña" autocomplete="off"> 
                     <input type="submit" value="Registrar" title="Entrar">
                </form>
            </div> 
        </div> 




   </body>
        <?php 
         include 'menu2.html' ;
       ?>
  

 </html>