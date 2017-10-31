<?php
  session_start();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type?"text/css" href="../../css/style.css">
    <title>Segunda Actividad</title>
  </head>
  <body>
    <h3>Has pedido <?= $_SESSION['numero']?> cajas</h3>
    <?php
      for($i=0;$i<count($_SESSION['contnum']);$i++){
        echo $_SESSION['contnum'][$i].', ';
      }
     ?>

  </body>
</html>
