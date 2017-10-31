<?php
  session_start();
  //Aquí se me a ocurrido que cuando el usuario presione el botón del formulario, tras rellenar los datos, lo redireccione al tercer archivo
  if  (isset($_POST['boton'])){
          header('Location:index3.php');
      }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type?"text/css" href="../../css/style.css">
    <title>Segunda Actividad</title>
  </head>
  <body>
    
  <h3>Hola, has pedido <?= $_SESSION['numero']?> cajas</h3>
  <form action="<?= $_SERVER['PHP_SELF'];?>" method="post">

  <?php
  $i=1;
  $z=0;
  $contnum=array();
    //Este bucle me crea tantos imputs como le haya pedido en la pagina anterior donde podremos poner los numeros para la siguiente
    while($i<=$_SESSION['numero']){
      $i++;
      echo"<input type='text' size='15' maxlength='30' name='numcaja'></br>";
      while($z <= $_SESSION['numero']){
        if(!empty($_POST['numcaja'])){
            $contnum[$z]=$_POST['numcaja'];            
          }
          $z++;
      }
    }
   ?>
    <!--Este es el botón para redirigir a la siguiente pagina-->
     <p><input name="boton" type="submit" value="Siguiente"></p>
   </form>
 </body>
 </html>
