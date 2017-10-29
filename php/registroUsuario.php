<?php
include "/xampp/htdocs/shop/clases/usuario.php";
$user = new user();
if ($_SESSION != NULL) {
    if ($_SESSION["EDIT"] === "TRUE") {
        $user->setIdUser($_SESSION["ID"]);
        $user->setPicture($_SESSION["PICTURE"]);
        $user->setUser($_SESSION["EMAIL"]);
        $user->setName($_SESSION["NAME"]);
        $user->setSurnameOne($_SESSION["SURNAMEONE"]);
        $user->setSurnameTwo($_SESSION["SURNAMETWO"]);
        $user->setAge($_SESSION["AGE"]);
        $user->setUser($_SESSION["USER"]);
        $user->setPassword($_SESSION["PASSWORD"]);
        $user->setLatitud($_SESSION["LATITUD"]);
        $user->setLongitud($_SESSION["LONGITUD"]);
    }
}

if (!empty($_POST)) {
    if (isset($_POST["txtName"]) && isset($_POST["txtSurnameOne"]) && isset($_POST["txtEmail"]) && isset($_POST["txtAge"]) && isset($_POST["txtLatitud"]) && isset($_POST["txtLongitud"]) && isset($_POST["txtPass"]) && isset($_POST["txtConfPass"])) {
        session_start();
        $user->setName($_REQUEST['txtName']);
        $user->setSurnameOne($_REQUEST['txtSurnameOne']);
        $user->setSurnameTwo($_REQUEST['txtSurnameTwo']);
        $user->setEmail($_REQUEST['txtEmail']);
        $user->setPicture($_FILES['image']);
        $user->setAge($_REQUEST['txtAge']);
        $user->setUser($_REQUEST['txtUser']);
        $user->setPassword($_REQUEST['txtPass']);
        $user->setLatitud($_REQUEST['txtLatitud']);
        $user->setLongitud($_REQUEST['txtLongitud']);
        if (isset($_SESSION) && parse_ini_string($_SESSION["ID"]) === 0) {
            if ($_SESSION["ID"] > 0) {
                print "<script>alert(\"Error. Actualmente estas logeado, debes cerrar session para poder registrate\");window.location='../index.php';</script>";
                return;
            }
            $user->saveUser();
        } else {
            $user->editUser($_SESSION["ID"]);
        }
    }
}
?>