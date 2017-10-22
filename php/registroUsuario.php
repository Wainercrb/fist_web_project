<?php
$id     = 0;
$foto   = "";
$email  = null;
$nombre = "";
$apellidoPaterno = "";
$apellidoMaterno = "";
$edad = "";
$usuario = "";
$pass = null;
$latitud = "";
$longitud = "";
if ($_GET) {
    $id   = $_GET["id"];
    if($_GET["edit"] !== "false"){
        $sql1 = "select * from usuario where id_usuario = '$id'";
        include "php/conexion.php";
        $query = $con->query($sql1);
        while ($r = $query->fetch_array()) {
            $id     = $r["id_usuario"];
            $nombre = $r["nombre"];
            $apellidoPaterno = $r["apellidoUno"];
            $apellidoMaterno = $r["apellidoDos"];
            $email = $r["email"];
            $foto  = $r["foto"];
            $edad = $r["edad"];
            $usuario = $r["usuario"];
            $pass = $r["contrasenna"];
            $latitud = $r["latitud"];
            $longitud = $r["longitud"];
            $edad = $r["edad"];
        }
        $con->close();
    }
}
if(!empty($_POST)){
    if(isset($_POST["txtName"]) &&isset($_POST["txtSurnameOne"]) &&isset($_POST["txtEmail"]) &&isset($_POST["txtAge"]) &&isset($_POST["txtLatitud"]) &&isset($_POST["txtLongitud"]) &&isset($_POST["txtPass"]) &&isset($_POST["txtConfPass"]))
    {
        include "/opt/lampp/htdocs/bl/fist_web_project/clases/usuario.php";
        $user = new user($_REQUEST['txtName'], $_REQUEST['txtSurnameOne'], $_REQUEST['txtSurnameTwo'], $_REQUEST['txtEmail'], $_FILES['image'], $_REQUEST['txtAge'], $_REQUEST['txtUser'], $_REQUEST['txtPass'], $_REQUEST['txtLatitud'], $_REQUEST['txtLongitud']);
        if ($_POST["txtId"]<= 0) {
            if($_POST["txtId"] != "0"){
                print "<script>alert(\"Error. Actualmente estas logeado, debes cerrar session para poder registrate\");window.location='/opt/lampp/htdocs/bl/fist_web_project/registroUsuario.php';</script>";
                return;
            }
            if ($user->checkUser($_REQUEST['txtUser'], $_REQUEST['txtEmail'])) {
                echo "true";
             print "<script>alert(\"Error. Este usuario y contraseña ya estan registrados :_(\");window.location='../registroUsuario.php';</script>";
            }
            $user->saveUser();
        }else{
              if ($user->checkUser($_REQUEST['txtUser'], $_REQUEST['txtEmail'])) {
            print "<script>alert(\"Error. Este usuario y contraseña ya estan registrados :_(\");window.location='../registroUsuario.php';</script>";
            }
            $user->saveUser();
        }
    }
}
?>