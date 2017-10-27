<?php
$host="127.0.0.1";
$user="root";
$password="";
$db="utn_tienda";
$con = new mysqli($host,$user,$password,$db);
if ($con->connect_error) {
   die("Error al conectar, más detalles: " . $con->connect_error);
}
print "<script>alert(\"conexion\")</script>";
?>