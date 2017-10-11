<?php

if(!empty($_POST)){
    if($_POST["txtId"] != "0"){
        print "<script>alert(\"Erro. Actualmente estas logeado, debes cerrar session para poder registrate\");window.location='../registroUsuario.php';</script>";
        return;
    }
    if(isset($_POST["txtName"]) &&isset($_POST["txtSurnameOne"]) &&isset($_POST["txtEmail"]) &&isset($_POST["txtAge"]) &&isset($_POST["txtLatitud"]) &&isset($_POST["txtLongitud"]) &&isset($_POST["txtPass"]) &&isset($_POST["txtConfPass"]))
    {
       
            include "conexion.php";
            $found=false;
            $sql1= "select * from usuario where usuario=\"$_POST[txtUser]\" or email=\"$_POST[txtEmail]\"";
            $query = $con->query($sql1);
            while ($r=$query->fetch_array())
            {
                $found=true;
                break;
            }
            if($found)
            {
                print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");</script>";
                return;
            }
            $data = file_get_contents($_FILES['image']['tmp_name']);
            $data = mysql_real_escape_string($data);
            $sql = "insert into usuario(nombre, apellidoUno, apellidoDos, foto, email, edad, usuario, contrasenna, latitud, longitud) value (\"$_POST[txtName]\",\"$_POST[txtSurnameOne]\",\"$_POST[txtSurnameTwo]\",'$data',\"$_POST[txtEmail]\",\"$_POST[txtAge]\",\"$_POST[txtUser]\",\"$_POST[txtPass]\",\"$_POST[txtLatitud]\",\"$_POST[txtLongitud]\")";
            $query = $con->query($sql);
            if($query!=null)
            {
                print "<script>alert(\"Registro exitoso. Puede ingresar ingresar su usuario desde la barra de de accesos\");window.location='../registroUsuario.php';</script>";
            }
        
    }
}
?>