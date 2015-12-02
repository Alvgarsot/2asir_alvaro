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

$edades=[10,20,30,40,50,60];
$altura=[1.75,2.00,1.82,1.72,1.65];
$peso=[70,80,120,74,90];
function medias($ed,$alt,$pes) {
  $gedad=0;
  $galt=0;
  $gpes=0;

  for($i=0;$i<sizeof($ed);$i++) {
    $gedad=$gedad+$ed[$i];

  }
  for($e=0;$e<sizeof($alt);$e++) {
    $galt=$galt+$alt[$e];

  }
  for($j=0;$j<sizeof($pes);$j++) {
    $gpes=$gpes+$pes[$j];

  }
  $media_de_las_edades=$gedad/sizeof($ed);
  $media_de_las_alturas=$galt/sizeof($alt);
  $media_de_los_pesos=$gpes/sizeof($pes);
  return array("EDAD" => $media_de_las_edades, "ALTURA" => $media_de_las_alturas, "PESO" => $media_de_los_pesos);

}
medias($edades,$altura,$peso);
var_dump(medias($edades,$altura,$peso));
?>
</body>
</html>
