
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
    {}
      else {
      //CREATING THE CONNECTION
      $connection = new mysqli("localhost", "tf", "12345", "TalleresFaber");
      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $mysqli->connect_error);
          exit();
      }
      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */
      if ($result = $connection->query("DELETE * FROM REPARACIONES WHERE id=$_GET['id'];")) {
          printf("<p>The select query returned %d rows.</p>", $result->num_rows);


          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);
}
      } //END OF THE IF CHECKING IF THE QUERY WAS RIGHT
    ?>
  </body>
</html>
