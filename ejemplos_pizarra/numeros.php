<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numeros</title>
    <link rel="stylesheet" type="text/css" href="style_chess.css">
  </head>
  <body>

        <div id="main">
          <?php
              //SIZE OF THE CHESS BOARD
              $tam=8;
              $contador=0;
              for ($i=0;$i<$tam;$i++) {
                  echo "<div class=\"row\">";
                  //CREATING THE ROW
                  for ($j=0;$j<$tam;$j++) {

                     echo "<div class=\"cell \"><h1>".$contador."</h1></div>";
                     $contador++;
                  }
                  echo "</div>";
              }
          ?>
        </div>
  </body>
</html>
