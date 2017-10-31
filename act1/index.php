<?php
//Aquí creo una nueva sessión para el usuario
  session_start();
      //Este if lo he puesto para comprobar que el usuario añada algo al formulario, en caso contrario este programa no se ejecutaría
      if  (isset($_POST)&&
          !empty($_POST['numero'])){
            //También añado esta linea de htmlspecialchars para evitar que el usuario añada contenido que no sean carácteres
            $numero=htmlspecialchars($_POST['numero']);
            //Aquí creo un array vacío que usaré mas adelante para añadir los numeros numeros junto a dos variables que utilizaré para
            //hacer calculos con los numeros
            $array=[];
            $a=0;
            $i=1;
            //justo ahora creo un bucle que comprueba uno por uno de los numeros si su dividendo es 0, lo que en caso afirmativo lo
            //añadiría al array creado hace un par de lineas atrás, esto se irá ejecutando hasta que la variable i sea menor o igual
            //al numero añadido por el usuario.
            while($i <= $_POST['numero']){
            if($_POST['numero']%$i==0){
                $array[$a]=$i;
                $a++;
              }
              $i++;
            }
          }

 ?>

<!--Aquí empieza el código HTML para la visualización del documento-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type?"text/css" href="../../css/style.css">
    <title>Primera Actividad</title>
  </head>
  <body>

    <h1>Encontrar los divisores inferiores</h1>
    <!--Aquí creo el formulario para la introducción de datos para que el programa funcione-->
    <form action="<?= $_SERVER['PHP_SELF'];?>" method="post">
      <p>Numero:<input type="number" name="numero"></p>
      <p><input type="submit" value="Buscar"></p>
    </form>

    <!--Y aquí imprime el resultado del array lleno de numeros con un for-->
    <?php
      for($i=0;$i<count($array);$i++){
        echo $array[$i].', ';
      }
     ?>

  </body>
</html>
