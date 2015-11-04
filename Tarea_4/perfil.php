<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
    </head>
    <body>
      <table border="1px">
      <?php

      $alumnos=[  [
                    "DNI" => "11139840Z",
                    "Nombre"=>"Lolo",
                    "Apel"=>"Gutierrez Perez",
                    "Direc"=>"Calle falsa 72/sevilla",
                    "Tfn"=>"672570005",
                    "Correo"=>"lolo@gmail.org",
                  ],
                  [
                    "DNI" => "4756746",
                    "Apel"=>"PEREZ",
                    "Nombre"=>"Pepito",
                  ],

              ];

      $guarda=$alumnos[$_GET["id"]];
      echo "<p>NOMBRE:".$guarda["Nombre"]."</p>"
      ?>
    </table>
    </body>
</html>
