<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php

$conector = new mysqli("localhost", "root", "", "world");
if ($conector->connect_errno) {
 echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
}
  //Hacemos una consulta
  $resultado = $conector->query("SELECT Name FROM country order by SurfaceArea asc");
  foreach ($resultado as $fila) {
      echo "El pais es ".$fila['Name']."<br>";
}
   ?>
  </body>
</html>
