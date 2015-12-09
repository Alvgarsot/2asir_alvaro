
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
      if (!isset($_SESSION)) {
      ?>
<form method="post" action="loginbasico2.php">
  <input type="text" note="nombre">
  <input type="password" note="contra">
</form>
<?php
}
?>

    </body>
</html>
