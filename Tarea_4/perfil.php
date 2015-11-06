<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
    img {
      height: 300px;
      width: 300px;
    };
    #container {
      width: 1000px;
      margin: 10px auto;
    }
    #imagen {
      float: left;
      height: 400px;
      width: 400px;
    };
    #contenido {
      float: left;
      height: 500px;
      width:500px;
    };
    </style>
    <link rel="stylesheet" type="text/css" href=" ">
    </head>
    <body>

      <div id="container">
      <?php
      echo "<div id='imagen'>";
        $imagenes=["http://statici.behindthevoiceactors.com/behindthevoiceactors/_img/actors/actor_12109.jpg",
        "https://ct.yimg.com/mr/IMAGES/PROSPECT/PHOTO/CROWDER-COPYUA__1_6_150.JPG",
        "http://www.afuegolento.com/img_db/noticias/9196_41_Dani_Martinez.jpg",
        "http://www.abc.es/Media/201403/05/PEPE2--644x362.jpg",
        "http://www.ub.edu/cadrugdesign/people/chema/Jose%20Manuel%20Granadino.jpg",
        "https://atletismoermua.sharepoint.com/siteimages/Lolo%20Garc%C3%ADa.jpg",
        "http://csl.cornell.edu/~martinez/Martinez.jpg",
        "https://upload.wikimedia.org/wikipedia/commons/b/b6/Jos%C3%A9_Larralde_1968.jpg",
        "http://mlb.mlb.com/mlb/images/players/head_shot/514888.jpg",
        "http://imagenesfotos.com/wp-content/2009/02/mourinho9.jpg"];
      echo "<img src=".$imagenes[$_GET["id"]].">";

      echo "</div>";
      echo "<div id='contenido'>";
      $alumnos=[  [
                    "DNI" => "11139840Z",
                    "Nombre"=>"Lolo",
                    "Apel"=>"Gutierrez Perez",
                    "Direc"=>"Calle falsa 72/sevilla",
                    "Tfn"=>"672570005",
                    "Correo"=>"lolo@gmail.org",
                  ],
                  [
                  "DNI" => "75639840Z",
                  "Nombre"=>"Tyrone",
                  "Apel"=>"Martin Cortés",
                  "Direc"=>"Las 3000 viviendas/sevilla",
                  "Tfn"=>"902 20 21 22",
                  "Correo"=>"tyrone@gmail.org",
                  ],
                  [
                  "DNI" => "75639855Z",
                  "Nombre"=>"Jamal",
                  "Apel"=>"Martin Cortés",
                  "Direc"=>"Las 3000 viviendas/sevilla",
                  "Tfn"=>"902 20 21 22",
                  "Correo"=>"jamal@gmail.org",
                  ],
                  [
                  "DNI" => "75639844Z",
                  "Nombre"=>"Tito",
                  "Apel"=>"Martin Cortés (MC)",
                  "Direc"=>"Las 3000 viviendas/sevilla",
                  "Tfn"=>"902 20 21 22",
                  "Correo"=>"tito@gmail.org",
                  ],
                  [
                  "DNI" => "75639833Z",
                  "Nombre"=>"Pepito",
                  "Apel"=>"Perez Perez",
                  "Direc"=>"Calle falsa 123/sevilla",
                  "Tfn"=>"672575885",
                  "Correo"=>"pepin@gmail.org",
                  ],
                  [
                  "DNI" => "95639822Z",
                  "Nombre"=>"Pepita",
                  "Apel"=>"Perez Perez",
                  "Direc"=>"Calle falsa 123/sevilla",
                  "Tfn"=>"972575885",
                  "Correo"=>"pepita@gmail.org",
                  ],
                  [
                  "DNI" => "88839840Z",
                  "Nombre"=>"Agapito",
                  "Apel"=>"Da Sousa",
                  "Direc"=>"Calle falsa 456/sevilla",
                  "Tfn"=>"877575835",
                  "Correo"=>"pito@gmail.org",
                  ],
                  [
                  "DNI" => "75639840Z",
                  "Nombre"=>"Maria",
                  "Apel"=>"Da Sousa",
                  "Direc"=>"Calle falsa 456/sevilla",
                  "Tfn"=>"377575885",
                  "Correo"=>"maria@gmail.org",
                  ],
                  [
                  "DNI" => "75635140Z",
                  "Nombre"=>"Jose",
                  "Apel"=>"Perez Martinez",
                  "Direc"=>"Calle falsa 789/sevilla",
                  "Tfn"=>"672555885",
                  "Correo"=>"jose@gmail.org",
                  ],
                  [
                  "DNI" => "75639990Z",
                  "Nombre"=>"Esteban",
                  "Apel"=>"Martinez Perez",
                  "Direc"=>"Calle falsa 0/sevilla",
                  "Tfn"=>"672015885",
                  "Correo"=>"esteban@gmail.org",
                  ],

              ];

      $guarda=$alumnos[$_GET["id"]];
      echo "<h1>".$guarda["Nombre"]."</h1>";
      echo "<p>MBA student in Graduate School of Business, admitted in Autumn 2011</p>";
      echo "<h2>Contact Information</h2>";
      echo "<p>Email<a href='#'>".$guarda["Correo"]."</a></p>";
      echo "<p>Phone ".$guarda["Tfn"]."</p></br>";
      echo "<p><a href='#'>StanfordWho listing</a></p>";
      echo "<p><a href='#'>URL of this page</a></p>";
      echo "<p><a href='#'>what's this?</a></p>";
      echo "</div>"
      ?>
    </div>
    </body>
</html>
