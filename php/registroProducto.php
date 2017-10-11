<?php
if(!empty($_POST)){
    if ($_POST["txtId"] === "0" || $_POST["txtId"] === "") {
        print "<script>alert(\"Tenes que estar logeado para poder agregar productos\");window.location='../".$_POST["pageName"]."';</script>";
        return;
    }
    if ($_POST["txtTipo"] === "usuario" || $_POST["txtTipo"] === "") {
        print "<script>alert(\"Este usaurio no tiene permisos para agregar productos\");window.location='../".$_POST["pageName"]."?id=".$_POST["txtId"].".&tipo=u';</script>";
        return;
    }
    if(isset($_POST["txtCode"]) &&isset($_POST["txtName"]) &&isset($_POST["txtBrand"]) &&isset($_POST["txtPrice"]) &&isset($_POST["txtQuantity"]) &&isset($_POST["cbCategory"]) &&isset($_POST["cbSubCategory"]) &&isset($_POST["txtDescription"]))
    {
        include "conexion.php";
        $data1 = file_get_contents($_FILES['image1']['tmp_name']);
        $data1 = mysql_real_escape_string($data1);
        $data2 = file_get_contents($_FILES['image2']['tmp_name']);
        $data2 = mysql_real_escape_string($data2);
        $data3 = file_get_contents($_FILES['image3']['tmp_name']);
        $data3 = mysql_real_escape_string($data3);
        $sql = "INSERT INTO producto(codigo, nombre, marca, precio, cantidad, categoria, sub_categoria, descripcion, foto1, foto2, foto3) VALUES (\"$_POST[txtCode]\",\"$_POST[txtName]\",\"$_POST[txtBrand]\",\"$_POST[txtPrice]\",\"$_POST[txtQuantity]\",\"$_POST[cbCategory]\",\"$_POST[cbSubCategory]\",\"$_POST[txtDescription]\",'$data1','$data2','$data3')";
        if ($con->query($sql) === TRUE) {
            $last_id = $con->insert_id;

            $sql = "INSERT INTO tienda_producto(id_tienda, id_producto) VALUES (\"$_POST[txtId]\",'$last_id')";
            if ($con->query($sql) === TRUE) {
                

                 print "<script>alert(\"Producto agregado correctamente\");window.location='../".$_POST["pageName"]."?id=".$_POST["txtId"].".&tipo=t';</script>";
            }else{

                print "<script>alert(\"Error al agregar el producto\");window.location='../".$_POST["pageName"]."?id=".$_POST["txtId"].".&tipo=t';</script>";
            }            
        } else {
            print "<script>alert(\"Error al agregar el producto\");window.location='../".$_POST["pageName"]."?id=".$_POST["txtId"].".&tipo=t';</script>";
        }
    }
}
?>