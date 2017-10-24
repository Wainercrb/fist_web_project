<?php
include "/opt/lampp/htdocs/bl/fist_web_project/clases/store.php";
$store = new store();
if(isset($_SESSION))
{
	if ($_SESSION["EDIT"] === "TRUE")
	{
		$store->etId_shop($_SESSION["ID"]);
		$store->setPicture($_SESSION["PICTURE"]);
		$store->setUser($_SESSION["EMAIL"]);
		$store->setName($_SESSION["NAME"]);
		$store->setUser($_SESSION["USER"]);
		$store->setPassword($_SESSION["PASSWORD"]);
		$store->setLatitud($_SESSION["LATITUD"]);
		$store->setLongitud($_SESSION["LONGITUD"]);
		$store->setPictureOne($_SESSION["PICTUREONE"]);
		$store->setPictureTwo($_SESSION["PICTURETWO"]);
		$store->setPictureThere($_SESSION["PICTURETHERE"]);
	}
}
if (!empty($_POST)) {
	if (isset($_POST["txtName"]) && isset($_POST["txtEmail"]) && isset($_POST["txtPass"]) && isset($_POST["txtLatitud"]) && isset($_POST["txtLongitud"]) && isset($_POST["txtPass"]) && isset($_POST["txtConfPass"])) {
		
		session_start();
		$store->setName($_REQUEST['txtName']);
		$store->setEmail($_REQUEST['txtEmail']);
		$store->setPhone($_REQUEST['txtPhone']);
		$store->setRate($_REQUEST['txtRate']);
		$store->setPicture($_FILES['image']);
		$store->setAge($_REQUEST['txtAge']);
		$store->setUser($_REQUEST['txtUser']);
		$store->setPassword($_REQUEST['txtPass']);
		$store->setLatitud($_REQUEST['txtLatitud']);
		$store->setLongitud($_REQUEST['txtLongitud']);
		$store->setPictureOne($_FILES['foto1']);
		$store->setPictureTwo($_FILES['foto2']);
		$store->setPictureThere($_FILES['foto3']);
		if (isset($_SESSION) || $_SESSION["ID"] <= 0)
		{
			$store->editStore($_SESSION["ID"]);
		}else
		{
			if($_SESSION["ID"] > 0)
			{
				print "<script>alert(\"Error. Actualmente estas logeado, debes cerrar session para poder registrate\");window.location='/opt/lampp/htdocs/bl/fist_web_project/registroUsuario.php';</script>";
				return;
			}
			if($store->checkUser($_REQUEST['txtUser'], $_REQUEST['txtEmail']))
			{
				print "<script>alert(\"Error. Este usuario y contraseña ya estan registrados :_(\");window.location='../registroUsuario.php';</script>";
			}
			$store->saveStore();
		}

	}
}
?>