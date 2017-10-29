<?php

/**
 * This is the class for the object person
 */
class store {

    private $id_shop;
    private $name;
    private $phone;
    private $rate;
    private $service;
    private $user;
    private $password;
    private $emil;
    private $picture;
    private $pictureOne;
    private $pictureTwo;
    private $pictureThre;
    private $latitud;
    private $longitud;

    function __construct() {
        $this->id_shop = 0;
        $this->name = "";
        $this->phone = "";
        $this->rate = 0;
        $this->service = 0;
        $this->user = "";
        $this->password = "";
        $this->emil = "";
        $this->picture = "";
        $this->pictureOne = "";
        $this->pictureTwo = "";
        $this->pictureThre = "";
        $this->latitud = "";
        $this->longitud = "";
    }

    function getId_shop() {
        return $this->id_shop;
    }

    function getName() {
        return $this->name;
    }

    function getPhone() {
        return $this->phone;
    }

    function getRate() {
        return $this->rate;
    }

    function getService() {
        return $this->service;
    }

    function getUser() {
        return $this->user;
    }

    function getPassword() {
        return $this->password;
    }

    function getEmil() {
        return $this->emil;
    }

    function getPicture() {
        return $this->picture;
    }

    function getPictureOne() {
        return $this->pictureOne;
    }

    function getPictureTwo() {
        return $this->pictureTwo;
    }

    function getPictureThre() {
        return $this->pictureThre;
    }

    function getLatitud() {
        return $this->latitud;
    }

    function getLongitud() {
        return $this->longitud;
    }

    function setId_shop($id_shop) {
        $this->id_shop = $id_shop;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }

    function setRate($rate) {
        $this->rate = $rate;
    }

    function setService($service) {
        $this->service = $service;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setEmil($emil) {
        $this->emil = $emil;
    }

    function setPicture($picture) {
        $this->picture = $picture;
    }

    function setPictureOne($pictureOne) {
        $this->pictureOne = $pictureOne;
    }

    function setPictureTwo($pictureTwo) {
        $this->pictureTwo = $pictureTwo;
    }

    function setPictureThre($pictureThre) {
        $this->pictureThre = $pictureThre;
    }

    function setLatitud($latitud) {
        $this->latitud = $latitud;
    }

    function setLongitud($longitud) {
        $this->longitud = $longitud;
    }

    public function saveStore() {
        include "conexion.php";
        $data = file_get_contents($this->picture['tmp_name']);
        $data = mysql_real_escape_string($data);
        $data1 = file_get_contents($this->pictureOne['tmp_name']);
        $data1 = mysql_real_escape_string($data1);
        $data2 = file_get_contents($this->pictureTwo['tmp_name']);
        $data2 = mysql_real_escape_string($data2);
        $data3 = file_get_contents($this->pictureThre['tmp_name']);
        $data3 = mysql_real_escape_string($data3);
        $sql = "INSERT INTO tienda(nombre, telefono, tarifa_apartado, servicio, usuario, contrasenna, email, foto, foto1, foto2, foto3, latitud, longitud) value ('$this->name','$this->phone','$this->rate','$this->service','$this->user','$this->password','$this->emil','$data','$data1','$data2','$data3','$this->latitud','$this->longitud')";
        if ($con->query($sql)) {
            $con->close();
            print "<script>alert(\"Bien. Su usuario se guardo correctamente ;-)\");window.location='../index.php';</script>";
        } else {
            die("Error description: " . mysqli_error($con));
        }
    }

    public function editStore($id) {
        include 'conexion.php';
        $data = file_get_contents($this->picture['tmp_name']);
        $data = mysql_real_escape_string($data);
        $data1 = file_get_contents($this->pictureOne['tmp_name']);
        $data1 = mysql_real_escape_string($data1);
        $data2 = file_get_contents($this->pictureTwo['tmp_name']);
        $data2 = mysql_real_escape_string($data2);
        $data3 = file_get_contents($this->pictureThre['tmp_name']);
        $data3 = mysql_real_escape_string($data3);
        $sql = "UPDATE tienda SET nombre = '$this->name', telefono = '$this->phone', tarifa_apartado = '$this->rate', servicio = '$this->service', usuario = '$this->user', contrasenna = '$this->password', email = '$this->emil', foto = '$data', foto1 = '$data1', foto2 = '$data2', foto3 = '$data3', latitud = '$this->latitud', longitud = '$this->longitud' WHERE id_tienda = $id";
        if ($con->query($sql)) {
            session_destroy();
            $con->close();
            print "<script>alert(\"Bien. Su usuario se actualizo correctamente ;-....vuelve a iniciar session para cargar tus datos actualizados)\");window.location='../index.php';</script>";
        }
        die("Error description: " . mysqli_error($con));
    }

    public function checkUser($usu, $email) {
        include "conexion.php";
        $sql = "SELECT * FROM tienda WHERE usuario='$usu' or email='$email'";
        if (!$query = $con->query($sql)) {
            echo("Error description: " . mysqli_error($con));
            return;
        }
        while ($r = $query->fetch_array()) {
            $con->close();
            return true;
        }
        $con->close();
        return false;
    }

    public function loadShop() {
        $state = false;
        include "conexion.php";
        $sql = "SELECT * FROM tienda WHERE (usuario='$this->user' or email='$this->emil') and contrasenna='$this->password'";
        if (!$query = $con->query($sql)) {
            echo("Error description: " . mysqli_error($con));
            return;
        }
        while ($row = $query->fetch_array()) {
            session_start();
            $_SESSION['ID'] = $row["id_tienda"];
            $_SESSION['NAME'] = $row["nombre"];
            $_SESSION['PHONE'] = $row["telefono"];
            $_SESSION['RATE'] = $row["tarifa_apartado"];
            $_SESSION['SERVICE'] = $row["servicio"];
            $_SESSION['EMAIL'] = $row["email"];
            $_SESSION['USER'] = $row["usuario"];
            $_SESSION['PASSWORD'] = $row["contrasenna"];
            $_SESSION['TYPEUSER'] = "shop";
            $_SESSION['PICTURE'] = $row["foto"];
            $_SESSION['PICTUREONE'] = $row["foto1"];
            $_SESSION['PICTURETWO'] = $row["foto2"];
            $_SESSION['PICTURETHERE'] = $row["foto3"];
            $_SESSION['LATITUD'] = $row["latitud"];
            $_SESSION['LONGITUD'] = $row["longitud"];
            $_SESSION["EDIT"] = "FALSE";
            $state = true;
        }
        $con->close();
        return $state;
    }

}
