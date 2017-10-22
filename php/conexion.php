<?php
$host="127.0.1";
$user="root";
$password="";
$db="utn_tienda";
$con = new mysqli($host,$user,$password,$db);
print "<script>alert(\"conexion\")</script>";
?>