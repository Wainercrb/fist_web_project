<?php

include "/xampp/htdocs/shop/clases/store.php";
$store = new store();

if (isset($_SESSION) && $_SESSION != NULL) {
    if ($_SESSION["EDIT"] === "TRUE") {
        $store->setId_shop($_SESSION["ID"]);
        $store->setPicture($_SESSION["PICTURE"]);
        $store->setEmil($_SESSION["EMAIL"]);
        $store->setName($_SESSION["NAME"]);
        $store->setRate($_SESSION["RATE"]);
        $store->setPhone($_SESSION["PHONE"]);
        $store->setUser($_SESSION["USER"]);
        $store->setPassword($_SESSION["PASSWORD"]);
        $store->setLatitud($_SESSION["LATITUD"]);
        $store->setLongitud($_SESSION["LONGITUD"]);
        $store->setPictureOne($_SESSION["PICTUREONE"]);
        $store->setPictureTwo($_SESSION["PICTURETWO"]);
        $store->setPictureThre($_SESSION["PICTURETHERE"]);
    }
}
if (!empty($_POST)) {
    if (isset($_POST["txtName"]) && isset($_POST["txtEmail"]) && isset($_POST["txtPass"]) && isset($_POST["txtLatitud"]) && isset($_POST["txtLongitud"]) && isset($_POST["txtPass"]) && isset($_POST["txtConfPass"])) {
        session_start();
        $store->setName($_REQUEST['txtName']);
        $store->setEmil($_REQUEST['txtEmail']);
        $store->setPhone($_REQUEST["txtPhone"]);
        $store->setRate($_REQUEST['txtRate']);
        $store->setPicture($_FILES['image']);
        $store->setService($_REQUEST['selectService']);
        $store->setUser($_REQUEST['txtUser']);
        $store->setPassword($_REQUEST['txtPass']);
        $store->setLatitud($_REQUEST['txtLatitud']);
        $store->setLongitud($_REQUEST['txtLongitud']);
        $store->setPictureOne($_FILES['image1']);
        $store->setPictureTwo($_FILES['image2']);
        $store->setPictureThre($_FILES['image3']);
        if ($_SESSION["ID"] === 0) {
            if ($store->checkUser($store->getUser(), $store->getEmil())) {
                print "<script>alert(\"Error, este usuario o contraseña ya se encuentran registrados.\");window.location='../index.php';</script>";
                return;
                } 
            session_destroy();
            $store->saveStore();
        } else {
            if ((isset($_SESSION)) && (parse_ini_string($_SESSION["ID"])) > 0) {
                $store->editStore($_SESSION["ID"]);
            }
        }
    }
}
?>