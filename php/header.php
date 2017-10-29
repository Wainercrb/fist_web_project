<?php

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction'])) {
  
}

function func() {
    // do stuff
}

/**
 * Metodo valida el login por recibido por el usuario.
 */
if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnLogin'])) {
    if (!empty($_POST)) {
        if (isset($_POST["txtUser"]) && isset($_POST["txtPass"])) {
            if ($_POST["txtUser"] != "" && $_POST["txtPass"] != "") {
                include "../clases/usuario.php";
                $user = new user();
                $user->setUser($_REQUEST['txtUser']);
                $user->setEmail($_REQUEST['txtUser']);
                $user->setPassword($_REQUEST['txtPass']);
                if ($user->loadUser()) {
                    print "<script>alert(\"*****Bienvenido, tipo usuario*******\");window.location='../registroUsuario.php';</script>";
                    return;
                }
                include "../clases/store.php";
                $shop = new store();
                $shop->setUser($_REQUEST['txtUser']);
                $shop->setEmil($_REQUEST['txtUser']);
                $shop->setPassword($_REQUEST['txtPass']);
                if ($shop->loadShop()) {
                    print "<script>alert(\"*****Bienvenido, tipo tienda*******\");window.location='../index.php';</script>";
                    return;
                }
                print"<script>alert(\"No se encontro ninguana considencia ;(. Verifique sus datos\");window.location='../index.php';</script>";
            }
        }
    }
}
?>