
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

  </head>
  <body>
    <?php
// POR ACABAR
    if (!isset($_GET['id']))
    {
      header("Location: ej41.php");
    }


    if (!isset($idrecamb)) {

      $connection = new mysqli("localhost", "tf", "12345", "TalleresFaber");



      if ($connection->connect_errno) {
          printf("Conexion fallida: %s\n", $mysqli->connect_error);
          exit();
      }


      $q1 = "SELECT IdRecambio FROM Incluyen WHERE IdReparacion=".$_GET['id'].";";
if ($result = $connection->query($q1)) {
//iuibduifuibhdfui
    while($obj = $result->fetch_object()) {

      $idrecamb=$obj->IdRecambio;
      echo $idrecamb;

      unset($obj);
//asdadasdafas


}

    }
    }

if ($connection->connect_errno) {
    printf("Conexion fallida: %s\n", $mysqli->connect_error);
    exit();
}
    $q2= "SELECT * FROM recambios WHERE IdRecambio=".$result.";";
    if ($result = $connection->query($q2)) {
      echo "error en la consulta";

      while($obj2 = $result->fetch_object()) {


        echo "<h2>Id del recambio:".$obj2->IdRecambio."</h2>
        <p>Descripción: ".$obj2->Descripcion."</p>
        <p>Unidad Base: ".$obj2->UnidadBase."</p>
        <p>Stock: ".$obj2->Stock."</p>
        <p>Precio de referencia: ".$obj2->PrecioReferencia."</p>";


      }

  unset($connection);
}

    ?>
  </body>
</html>
