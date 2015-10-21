<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
    </head>
    <body>
      <table style="solid black" border="1px">

      <?php
      $num_tabla=5;
      $i=0;
      echo "<tr><th>TABLA DEL $num_tabla </th></tr>";
        while ($i<=10) {
        echo "<tr><td> $i * $num_tabla = ".$i*$num_tabla."</td></tr>";

        $i++;
      }
       ?>
       </table>

    </body>
</html>
