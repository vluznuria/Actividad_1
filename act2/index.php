<?php
  session_start();
    //Justo aquí creo dos array para guardar 5 apellidos inventados por mi sin ordenar, totalmente aleatorios
    $apellidos1=["Lopez", "Garcia", "Vazquez", "Luz", "Jimenez"];
    $apellidos2=["Dominguez", "Navarro", "Muñoz", "Ramos", "Africa"];
    
    //Esta sentencia ordena los array por orden alfabetico
    sort($apellidos1);
    sort($apellidos2);

    //Se me a ocurrido crear un tercer array mezclando los dos primeros para poder ordenadorlos mas tarde
    $apellidos3 = array_merge($apellidos1, $apellidos2);
  
    //Y aquí, como he hecho antes, ordeno el tercer array alfabeticamente
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
    <!--Aquí empiezo el código php para imprimir los resultados de los array, primero imprimo los de la primera clase, luego imprimo los
    de la segunda clase y el tercero imprimo la mezcla de ambos, todos ordenados alfabeticamente-->    
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
