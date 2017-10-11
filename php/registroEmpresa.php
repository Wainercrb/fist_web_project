<?php
if (!empty($_POST)) {
	if (isset($_POST["txtName"]) && isset($_POST["txtEmail"]) && isset($_POST["txtPass"]) && isset($_POST["txtLatitud"]) && isset($_POST["txtLongitud"]) && isset($_POST["txtPass"]) && isset($_POST["txtConfPass"])) {
		if ($_POST["txtName"] != "" && $_POST["txtEmail"] != "" && $_POST["txtUser"] != "" && $_POST["txtLatitud"] != "" && $_POST["txtLongitud"] != "" && $_POST["txtPass"] == $_POST["txtConfPass"]) {
			include "conexion.php";
			$found = false;
			$sql1  = "select * from tienda where usuario=\"$_POST[txtUser]\" or email=\"$_POST[txtEmail]\"";
			$query = $con->query($sql1);
			while ($r = $query->fetch_array()) {
				$found = true;
				break;
			}
			if ($found) {
				print"<script>alert(\"Nombre de usuario o email ya estan registrados.\");</script>";

				return;
			}
			$data  = file_get_contents($_FILES['image']['tmp_name']);
			$data  = mysql_real_escape_string($data);
			$data1 = file_get_contents($_FILES['image1']['tmp_name']);
			$data1 = mysql_real_escape_string($data1);
			$data2 = file_get_contents($_FILES['image2']['tmp_name']);
			$data2 = mysql_real_escape_string($data2);
			$data3 = file_get_contents($_FILES['image3']['tmp_name']);
			$data3 = mysql_real_escape_string($data3);
			$sql   = "insert into tienda(nombre, telefono, tarifa_apartado, servicio, usuario, contrasenna, email, foto, foto1, foto2, foto3, latitud, longitud) value (\"$_POST[txtName]\",\"$_POST[txtTel]\",\"$_POST[txtTr]\",\"$_POST[selectService]\",\"$_POST[txtUser]\",\"$_POST[txtPass]\",\"$_POST[txtEmail]\",'$data','$data1','$data2','$data3',\"$_POST[txtLatitud]\",\"$_POST[txtLongitud]\")";
			$query = $con->query($sql);
			if ($query != null) {
				print"<script>alert(\"Registro exitoso. Puede ingresar ingresar su usuario desde la barra de de accesos\");window.location='../$tmpName';</script>";

			}
			$con->close();
		}
	}
}
?>