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
      $aleatorio=rand(1,4);
      switch ($aleatorio) {
        case 1:
        echo "arriba";
        break;
        case 2:
        echo "abajo";
        break;
        case 3:
        echo "izquierda";
        break;
        case 4:
        echo "derecha";
        break;
      };
       ?>
    </body>
</html>
