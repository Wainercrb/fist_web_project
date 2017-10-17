<?php
$id     = 0;
$foto   = "";
$email  = "";
$nombre = "";
$tipoU = "";
$edad = "";
$usuario = "";
$pass = "";
$latitud = "";
$longitud = "";
if ($_GET) {
	$id   = $_GET["id"];
	$sql1 = "select * from usuario where id_usuario = '$id'";
	include "php/conexion.php";
	$query = $con->query($sql1);
	while ($r = $query->fetch_array()) {
		$id     = $r["id_usuario"];
		$nombre = $r["nombre"]." ".$r["apellidoUno"]." ".$r["apellidoDos"];
		$email = $r["email"];
		$foto  = $r["foto"];
		$edad = $r["edad"];
		$usuario = $r["usuario"];
		$pass = $r["contrasenna"];
		$latitud = $r["latitud"];
		$longitud = $r["longitud"];
	}
	$con->close();
}
?>