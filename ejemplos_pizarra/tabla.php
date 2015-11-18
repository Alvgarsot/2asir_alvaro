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

      function tabla($numfilas, $numcolumnas) {
        echo "<table>";
        for ($i=0;$i<$numfilas;$i++) {
           echo "<tr>";
             for ($e=0;$e<$numcolumnas;$e++) {
               echo "<td>$i,$e</td>";
            }
            echo  "</tr>";
        }
        echo "</table>";
      }
      tabla(5,5)
?>
    </body>
</html>
