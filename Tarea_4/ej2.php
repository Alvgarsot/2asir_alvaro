<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="">
     <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  <script>
  $(function() {    var dialog, form;
    $( "#dialog" ).dialog();

  });
  </script>

  </head>
  <body>

<div id="dialog" title="Logueate">
  <p class="validateTips">Todos los campos son requeridos</p>

  <form method="post">


    <fieldset>
      <label for="name">Usuario</label>
    <input type="text" name="name" id="name" class="text ui-widget-content ui-corner-all"></br>
    <label for="password">Contraseña</label>
      <input type="password" name="password" id="password" class="text ui-widget-content ui-corner-all">

<?php
if (isset($_POST["name"])&& $_POST["name"]<> "pepe"||isset($_POST["password"])&& $_POST["password"]<> "1234") {
  echo "Usuario incorrecto";

}
?>
      <input type="submit">

    </fieldset>

    <?php

    if ($_POST["name"]=="pepe"&&$_POST["password"]=="1234") {
      header('Location: matricula.php');

    }

    ?>
  </form>
</div>

  </body>
</html>
