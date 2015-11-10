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
        #info {
            margin-left: 50px;
        float: left;
            height: 600px;
            width: 300px;
            color: black;
            background-color: gray;
            margin-right: 50px;
            padding-left: 20px;
        }
        #info2 {
        float: left;
            height: 600px;
            width: 300px;
            color: black;
            background-color: gray;
            margin-right: 50px;
            padding-left: 20px;
        }
        #info3 {
        float: left;
            height: 600px;
            width: 300px;
            color: black;
            background-color: gray;
            padding-left: 20px;
        }
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
          echo  "<option  value='2ASIR'>2ASIR</option>";
      echo  "</select>";
    echo  "</fieldset>";
    echo  "<fieldset><legend>Lista de Asignaturas</legend>";
echo  "<p><input type='checkbox' name='asignatura1' value='Redes'>REDES</p>";
echo  "<p><input type='checkbox' name='asignatura2' value='Base de datos'>BASES DE DATOS</p>";
echo  "<p><input type='checkbox' name='asignatura3' value='Seguridad'>SEGURIDAD</p>";
echo  "<p><input type='checkbox' name='asignatura4' value='Sistemas'>SISTEMAS</p>";
echo  "<p><input type='checkbox' name='asignatura5' value='Implantacion'>IMPLANTACION</p>";
echo  "<p><input type='checkbox' name='asignatura6' value='Empresa'>EMPRESA</p>";
    echo  "</fieldset>";
    echo  "<fieldset><legend>Opción a beca</legend>";
echo  "<p><input type='radio' name='beca' value='Si'>Con beca</p>";
echo  "<p><input type='radio' name='beca' value='No' checked='checked'>Sin beca</p>";
    echo  "</fieldset>";
  echo  "<input id='enviar' type='submit'>";
}
else {
    
  echo "<div id='info'><h3>DNI</h3><p>".$_POST["DNI"]."</p>
  <h3>Nombre</h3><p>".$_POST["nombre"]."</p>
  <h3>Apellidos</h3><p>".$_POST["apellidos"]."</p>
  <h3>Direccion</h3><p>".$_POST["direccion"]."</p>
  <h3>Telefono</h3><p>".$_POST["telefono"]."</p>
  <h3>E-mail</h3><p>".$_POST["email"]."</p></div><div id='info2'>
  <h3>Curso</h3><p>".$_POST["curso"]."</p>
  <h3>Beca</h3><p>".$_POST["beca"]."</p></div><div id='info3'>
  <h3>Asignatura/s escogida/s</h3><ul>";
   if (isset($_POST["asignatura1"])) {
   echo "<li>REDES</li>";
   }
  if (isset($_POST["asignatura2"])) {
   echo "<li>Base de datos</li>";
   }
    if (isset($_POST["asignatura3"])) {
   echo "<li>Seguridad</li>";
   }
    if (isset($_POST["asignatura4"])) {
   echo "<li>Sistemas</li>";
   }
   if (isset($_POST["asignatura5"])) {
   echo "<li>Implantacion</li>";
   }
   if (isset($_POST["asignatura6"])) {
   echo "<li>Empresa</li>";
   }
echo "</ul></div>";
}

?>
    </form>

    </div>
    </body>
</html>