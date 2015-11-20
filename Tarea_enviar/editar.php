
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
      //CREATING THE CONNECTION
      $connection = new mysqli("localhost", "tf", "12345", "TalleresFaber");
      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $mysqli->connect_error);
          exit();
      }
      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */
      if ($result = $connection->query("SELECT * FROM REPARACIONES WHERE id=".$_GET['id'])) {
          printf("<p>The select query returned %d rows.</p>", $result->num_rows);
          var_dump($connection->query("SELECT * FROM REPARACIONES WHERE id=".$_GET['id']))
          //FETCHING OBJECTS FROM THE RESULT SET
          //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
          while($obj = $result->fetch_object()) {
              //PRINTING EACH ROW
              echo "<form action='' method='post'>";
              echo "<input type='text' name='idrep' value=".$obj->IdReparacion.">";
              echo "<input type='text' name='idrep' value=".$obj->Matricula.">";
              echo "<input type='date' name='idrep' value=".$obj->FechaEntrada.">";
              echo "<input type='number' name='idrep' value=".$obj->Km.">";
              echo "<input type='text' name='idrep' value=".$obj->Averia.">";
              echo "<input type='date' name='idrep' value=".$obj->FechaSalida.">";
              echo "<input type='number' name='idrep' value=".$obj->Reparado.">";
              echo "<input type='text' name='idrep' value=".$obj->Observaciones.">";
              echo "<input type='submit'>";
              echo "</form>";
          }
          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);
      } //END OF THE IF CHECKING IF THE QUERY WAS RIGHT
    ?>
  </body>
</html>
