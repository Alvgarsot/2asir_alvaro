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
if (!isset($_POST['enviar'])) {
echo "<form method='post' action='ej3.php'>
    <input type='number' name='numero'></br></br>
    <input type='submit' name='enviar'>
</form>";
}

if (isset($_POST['enviar'])) {
  $connection = new mysqli("localhost", "tf", "12345", "TalleresFaber");

  if ($connection->connect_errno) {
      printf("Conexion fallida: %s\n", $mysqli->connect_error);
      exit();
  }
  if ($result = $connection->query("SELECT * FROM RECAMBIOS WHERE Stock<".$_POST['numero'].";")) {

    }
    while($obj = $result->fetch_object()) {
      echo "<ul><li>".$obj->IdRecambio."<ul>
      <li>".$obj->Descripcion."</li>
      <li>".$obj->UnidadBase."</li>
      <li>".$obj->Stock."</li>
      <li>".$obj->PrecioReferencia."</li>
      </ul></li></ul>";

    }
    $result->close();
    unset($obj);
    unset($connection);
}


?>
</body>
</html>
