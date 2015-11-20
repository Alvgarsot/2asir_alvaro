
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GETTING DATA FROM A MYSQL DATABASE</title>
    <style>
      img {
        height: 35px;
        width: 35px;
      }
    </style>
  </head>
  <body>
    <?php
    if (!isset($_GET['id']))
    {
      header("Location: crear.php")
    }

      //CREATING THE CONNECTION
      $connection = new mysqli("localhost", "tf", "12345", "TalleresFaber");
      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $mysqli->connect_error);
          exit();
      }
      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */
      $q1 = "DELETE FROM Incluyen WHERE id=".$_GET['id'];
      $q2 = "DELETE FROM Interviene WHERE id=".$_GET['id'];
      $q3 = "DELETE FROM FACTURAS WHERE id=".$_GET['id'];
      $q4 = "DELETE FROM REPARACIONES WHERE id=".$_GET['id'];

      if (!($result = $connection->query($q1))) {

        echo "Error en la conexion con la tabla incluyen";
      }
      if (!($result = $connection->query($q2))) {

        echo "Error en la conexion con la tabla Interviene";
      }

      if (!($result = $connection->query($q3))) {

        echo "Error en la conexion con la tabla FACTURAS";
      }
      if (!($result = $connection->query($q4))) {

        echo "Error en la conexion con la tabla REPARACIONES";
      }

          //Free the result. Avoid High Memory Usages
          unset($obj);
          unset($connection);

      //END OF THE IF CHECKING IF THE QUERY WAS RIGHT
    ?>
  </body>
</html>
