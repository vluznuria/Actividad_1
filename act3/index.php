<?php
  session_start();

  if  (isset($_POST)&&
      !empty($_POST['numero'])){
          $numero=htmlspecialchars($_POST['numero']);
          $_SESSION['numero']=$numero;
          header('Location:index2.php');
      }

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" type?"text/css" href="../../css/style.css">
     <title>Tercera Actividad</title>
   </head>
   <body>

     <h1>Añade los numeros que quieras</h1>

     <form action="<?= $_SERVER['PHP_SELF'];?>" method="post">
       <p>Numero de cajas:<input type="number" name="numero"></p>
       <p><input type="submit" value="Cajas"></p>
     </form>

   </body>
 </html>
