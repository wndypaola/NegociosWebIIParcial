<?php
 session_start();
 if (isset($_POST["capturar"])) {
   $registro = array();
   $registro["nombre"] = $_POST["nombre"];

   $registro = array();
   if (isset($_POST["registros"])) {
     $registro = array();
     $registro = $_SESSION["registros"];
   }
   $registros[] = $registro;

   $_SESSION["registros"] = $registros;
 }
?>





<DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Ejemplo</title>
</head>
  <body>
    <h1>Primer ejemplo</h1>
    <form action="ejemplo.php" method="post">
      <label for="nombre">Ingrese Nombre</label>
      <input type="text" name="nombre" placeholder="Nombre">
      <input type="submit" name="capturar" value="Capturar">
    </form>
  </body>
</html>
