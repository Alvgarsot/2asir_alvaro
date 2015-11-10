<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script>
    $(document).ready(function () {
    $('#enviar').click(function() {
      marcado = $("input[type=checkbox]:checked").length;

      if(!marcado) {
        alert("Tienes que marcar al menos una casilla");
        return false;
      }
    });
});
    </script>
    <style>

    </style>
    <link rel="stylesheet" type="text/css" href=" ">
    </head>
    <body>

      <div id="container">
        <form method="post">
        <?php
        if (empty($_POST)) {

    echo  "<fieldset>";
      echo  "<legend>Datos personales</legend>";
    echo  "<p>DNI:<input type='text' name='DNI' required></p>";
  echo  "<p>Nombre:<input type='text' name='nombre' required></p>";
    echo  "<p>Apellidos:<input type='text' name='apellidos' required></p>";
  echo  "<p>Direccion:<input type='text' name='direccion' required></p>";
    echo  "<p>Telefono:<input type='tel' name='telefono' required></p>";
    echo  "<p>E-mail:<input type='email' name='email' required></p>";
  echo  "</fieldset>";
    echo  "<fieldset><legend>Curso</legend>";
      echo  "<select name='curso'>";
        echo  "<option  value='1ASIR'>1ASIR</option>";
          echo  "<option name='curso' value='2ASIR'>2ASIR</option>";
      echo  "</select>";
    echo  "</fieldset>";
    echo  "<fieldset><legend>Lista de Asignaturas</legend>";
echo  "<p><input type='checkbox' name='asignatura'>REDES</p>";
echo  "<p><input type='checkbox' name='asignatura'>BASES DE DATOS</p>";
echo  "<p><input type='checkbox' name='asignatura'>SEGURIDAD</p>";
echo  "<p><input type='checkbox' name='asignatura'>SISTEMAS</p>";
echo  "<p><input type='checkbox' name='asignatura'>IMPLANTACION</p>";
echo  "<p><input type='checkbox' name='asignatura'>EMPRESA</p>";
    echo  "</fieldset>";
    echo  "<fieldset><legend>Opción a beca</legend>";
echo  "<p><input type='radio' name='beca' value='si'>Con beca</p>";
echo  "<p><input type='radio' name='beca' value='no' checked='checked'>Sin beca</p>";
    echo  "</fieldset>";
  echo  "<input id='enviar' type='submit'>";
}
else {
  echo "<h2>DNI</h2><p>".$_POST["DNI"]."</p>
  <h2>Nombre</h2><p>".$_POST["nombre"]."</p>
  <h2>Apellidos</h2><p>".$_POST["apellidos"]."</p>
  <h2>Direccion</h2><p>".$_POST["direccion"]."</p>
  <h2>Telefono</h2><p>".$_POST["telefono"]."</p>
  <h2>E-mail</h2><p>".$_POST["email"]."</p>
  <h2>Curso</h2><p>".$_POST["curso"]."</p>
  ";
}

?>
    </form>



    </div>
    </body>
</html>
