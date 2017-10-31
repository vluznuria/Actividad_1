<?php
  session_start();
  
  if  (isset($_POST)&&
      !empty($_POST['numero'])){
          $numero=htmlspecialchars($_POST['numero']);
          //aquí guardo en $numero el numero puesto en el formulario del html para guardarlo para trabajar mas adelante con el
          $_SESSION['numero']=$numero;
          //en esta linea estoy vinculando este archivo con el index2.php porque tras pedir un numero saldrán en la otra pantalla
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
          <!--Este formulario me pide cuantas cajas para introducir numeros quiero para que en la pantalla siguiente me las imprima
          en orden-->
     <form action="<?= $_SERVER['PHP_SELF'];?>" method="post">
       <p>Numero de cajas:<input type="number" name="numero"></p>
       <p><input type="submit" value="Cajas"></p>
     </form>

   </body>
 </html>
