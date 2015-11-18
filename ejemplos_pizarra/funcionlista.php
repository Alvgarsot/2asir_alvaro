<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
    </head>
    <body>
      <!-- función simple -->
      <?php

      function crearlista($elementos) {
        echo "<ul>";
        for ($i=0;$i<$elementos;$i++) {
           echo "<li>$i</li>";
        }
        echo "</ul>";
      }
      crearlista(5)
?>
    </body>
</html>
