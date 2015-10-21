<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
    </head>
    <body>
      <table border="1px"> /*EJERCICIO POR ACABAR */
      <?php
      $posicionx=0;
      $posiciony=0;
      $color=0;
      echo "<tr>";
      while ($posiciony<=8) {
        if ($posicionx<=8) {
            if (($color%2)==1) {
              echo "<td style=\"background-color:black\"> </td>";
              $posicionx++;
            }
            else {
              echo "<td></td>";
              $posicionx++;
            }
            }
          else {
            echo "</tr><tr>";
              $posiciony++;
          }



      }
       ?>
     </table>
    </body>
</html>
