<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
    </head>
    <body>
      <!-- buscar cadena POR ACABAR-->
      <?php
      $cadenas1=["a"=>"alubias","b"=>"judias","c"=>"cebollas","d"=>"lechuga","e"=>"tomates"];
      $palabra="cebollas";

      function compara($comparo) {
        for ($i=0;$i<sizeof($comparo);$i++) {
          if ($comparo[$i]==$palabra) {
            return true;
          }

        }
        return false;
      }
      if (contains($cadenas1,$palabra)) {
        echo "<p>si esta</p>";
      }
      else
      {
        "<p>no esta</p>";
      }




?>
    </body>
</html>
