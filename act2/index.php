<?php
  session_start();

    $apellidos1=["Lopez", "Garcia", "Vazquez", "Luz", "Jimenez"];
    $apellidos2=["Dominguez", "Navarro", "Muñoz", "Ramos", "Africa"];

    sort($apellidos1);
    sort($apellidos2);

    $apellidos3 = array_merge($apellidos1, $apellidos2);
    sort($apellidos3);

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type?"text/css" href="../../css/style.css">
    <title>Segunda Actividad</title>
  </head>
  <body>

    <h1>Apellidos alumnos</h1>
    <?php
      foreach ($apellidos1 as $clave => $valor) {
        echo "Apellidos[" . $clave . "] = " . $valor . "<br>";
      }
      echo "<br>";
      foreach ($apellidos2 as $clave => $valor) {
        echo "Apellidos[" . $clave . "] = " . $valor . "<br>";
      }
      echo "<br>";
      foreach ($apellidos3 as $clave => $valor) {
        echo "Apellidos[" . $clave . "] = " . $valor . "<br>";
      }
     ?>
  </body>
</html>
