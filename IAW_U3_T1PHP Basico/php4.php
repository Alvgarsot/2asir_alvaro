<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
    </head>
    <body>
      <?php
      $numero1=3.14;
      $numero2=7.47;
      echo "<h1>Numeros redondeados</h1>";
      echo $numero1."+".$numero2."=".round($numero1+$numero2)."<br>";
      echo $numero1."-".$numero2."=".round($numero1-$numero2)."<br>";
      echo $numero1."/".$numero2."=".round($numero1/$numero2)."<br>";
      echo $numero1."*".$numero2."=".round($numero1*$numero2)."<br>";
       ?>
    </body>
</html>
