<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numeros</title>
    <link rel="stylesheet" type="text/css" href="">
  </head>
  <body>

        <div id="main">
          <table>
          <?php
            $v1=["Nombre"=>"Alvaro","Apellido"=>"Garrido"];
            foreach ($v1 as $k => $j)
            {
              echo "<tr><td>".$k."</td><td></td>".$j."</tr>";

            }

          ?>
        </table>
        </div>
  </body>
</html>
