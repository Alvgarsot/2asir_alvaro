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

$datos=[
        "222222X"=>["Nombre"=>"Juan Diego","Apellidos"=>"Perez", "Localidad"=>"Bormujos"], "333333Y"=>["Nombre"=>"Paco", "Apellidos"=>"Fernández", "Localidad"=>"Salteras"],
];

foreach($datos as $dni=>$info){
      echo "<ul><li>".$dni."<ul>";
      foreach($datos[$dni] as $var1=>$var2){

          echo "<li>".$var1.": ".$var2."</li>";

      };
      echo "</ul></li></ul>";
};

?>
</body>
</html>
