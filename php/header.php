<?php

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction'])) {
	echo "wainer";
}
function func() {
	// do stuff
}
//Metodo para verificar el usuario
if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnLogin'])) {
	if (!empty($_POST)) {
		if (isset($_POST["txtUser"]) && isset($_POST["txtPass"])) {
			if ($_POST["txtUser"] != "" && $_POST["txtPass"] != "") {
				include "/opt/lampp/htdocs/bl/fist_web_project/clases/usuario.php";
                $user = new user();
                $user->setUser($_REQUEST['txtUser']);
                $user->setEmail($_REQUEST['txtUser']);
                $user->setPassword($_REQUEST['txtPass']);
                if ($user->loadUser()) {
                print "<script>alert(\"*****Bienvenido*******\");window.location='../registroUsuario.php';</script>";
                }
                include "/opt/lampp/htdocs/bl/fist_web_project/clases/store.php";
                $shop = new store();
                $shop->setUser($_REQUEST['txtUser']);
                $shop->setEmail($_REQUEST['txtUser']);
                $shop->setPassword($_REQUEST['txtPass']);
                if ($shop->loadShop()) {
                print "<script>alert(\"*****Bienvenido*******\");window.location='../registroUsuario.php';</script>";
                }
                print"<script>alert(\"Usuario incorrecto, verifique sus datos.\");window.location='../registroUsuario.php';</script>";
         	}
		}
	}
}

?>