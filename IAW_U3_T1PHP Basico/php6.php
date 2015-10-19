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
      $fecha=date("d");
      if ($fecha<11) {
        echo "<h1>Esta pagina está fuera de servicio</h1>";
      }
      else {
        echo "<h1>Esta pagina funciona correctamente</h1>";
      }
       ?>
    </body>
</html>
