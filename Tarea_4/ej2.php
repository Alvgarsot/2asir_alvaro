<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <style>
    body { font-size: 62.5%; }
    label, input { display:block; }
    input.text { margin-bottom:12px; width:95%; padding: .4em; }
    fieldset { padding:0; border:0; margin-top:25px; }
    h1 { font-size: 1.2em; margin: .6em 0; }
  </style>
  <script>
  $(function() {
    var dialog, form;
    $( "#dialog" ).dialog({

      autoOpen: true,
      height: 300,
      width: 350,
      modal: true,
      buttons: {
        Enviar: function() {

        };
        Cancel: function() {
          dialog.dialog( "close" );
        }
      },
      close: function() {
        form[ 0 ].reset();
        allFields.removeClass( "ui-state-error" );
      }
    });

  });
  </script>

  </head>
  <body>

<div id="dialog" title="Logueate">
  <p class="validateTips">Todos los campos son requeridos</p>

  <form action="ej2.php">
    <?php

    echo "<fieldset>";
      echo "<label for='name'>Usuario</label>";
      echo "<input type='text' name='name' id='name' class='text ui-widget-content ui-corner-all'>";
      echo "<label for='password'>Contraseña</label>";
      echo "<input type='password' name='password' id='password' class='text ui-widget-content ui-corner-all'>";


      echo "<input type='submit'>";

    echo "</fieldset>";
    if ($_GET["name"]=="pepe"||$_GET["password"]=="1234") {
      header('Location: /Matricula.php');
    }
    else {
      echo "USUARIO INCORRECTO";
    }

    ?>
  </form>
</div>

  </body>
</html>
