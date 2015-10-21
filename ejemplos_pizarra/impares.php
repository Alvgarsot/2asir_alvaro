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
      $num_impares=0;
      $i=0;
      while ($num_impares<10) {
        if (($i%2)==1) {
        echo "$i ES IMPAR<br>";
        $num_impares++;
        }
        $i++;
      }
       ?>
    </body>
</html>
