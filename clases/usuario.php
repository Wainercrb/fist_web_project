<?php

/**
 * This is the class for the object person
 */
class user {

    private $id_user;
    private $name;
    private $surnameOne;
    private $surnameTwo;
    private $email;
    private $picture;
    private $age;
    private $user;
    private $password;
    private $latitud;
    private $longitud;

    function __construct() {
        $this->id_user = 0;
        $this->name = "";
        $this->surnameOne = "";
        $this->surnameTwo = "";
        $this->email = "";
        $this->picture = "";
        $this->age = 0;
        $this->user = "";
        $this->password = "";
        $this->latitud = "";
        $this->longitud = "";
    }

    /* get and set for $id_user */

    public function getId_user() {
        return $this->id_user;
    }

    public function setIdUser($id_user) {
        return $this->id_user = $id_user;
    }

    /* get and set for $name */

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        return $this->name = $name;
    }

    /* get and set for surname one */

    public function getSurnameOne() {
        return $this->surnameOne;
    }

    public function setSurnameOne($surnameOne) {
        return $this->surnameOne = $surnameOne;
    }

    /* get and set for surname two */

    public function getSurnameTwo() {
        return $this->surnameTwo;
    }

    public function setSurnameTwo($surnameTwo) {
        return $this->surnameTwo = $surnameTwo;
    }

    /* get and set for $email */

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        return $this->email = $email;
    }

    /* get and set for $picture -> this are user picture profile */

    public function getPicture() {
        return $this->picture;
    }

    public function setPicture($picture) {
        return $this->picture = $picture;
    }

    /* get and set for $age */

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        return $this->age = $age;
    }

    /* get and set of $user */

    public function getUser() {
        return $this->user;
    }

    public function setUser($user) {
        return $this->user = $user;
    }

    /* get and set for $password */

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        return $this->password = $password;
    }

    /* get and set for $latitud */

    public function getLatitud() {
        return $this->latitud;
    }

    public function setLatitud($latitud) {
        return $this->latitud = $latitud;
    }

    /* get and set for $longitud */

    public function getLongitud() {
        return $this->longitud;
    }

    public function setLongitud($longitud) {
        return $this->longitud = $longitud;
    }

    public function saveUser() {
        include "conexion.php";
        $data = file_get_contents($this->picture['tmp_name']);
        $data = mysql_real_escape_string($data);
        $sql = "INSERT INTO usuario(nombre, apellidoUno, apellidoDos, foto, email, edad, usuario, contrasenna, latitud, longitud) value ('$this->name','$this->surnameOne','$this->surnameTwo','$data','$this->email','$this->age','$this->user','$this->password','$this->latitud','$this->longitud')";
        if ($con->query($sql)) {
            $con->close();
            print "<script>alert(\"Bien. Su usuario se guardo correctamente ;-)\");window.location='../index.php';</script>";
        } else {
            echo("Error description: " . mysqli_error($con));
        }
    }

    public function editUser($id) {
        include "conexion.php";
        $data = file_get_contents($this->picture['tmp_name']);
        $data = mysql_real_escape_string($data);
        $sql = "UPDATE usuario SET nombre = '$this->name', apellidoUno = '$this->surnameOne', apellidoDos = '$this->surnameTwo', foto = '$data', email = '$this->email', edad = '$this->age', usuario = '$this->user', contrasenna = '$this->password', latitud = '$this->latitud', longitud = '$this->longitud' WHERE  id_usuario = '$id'";
        if ($con->query($sql)) {
            $con->close();
            session_destroy();
            print "<script>alert(\"Bien. Su usuario se actualizo correctamente ;-), vuelve a iniciar sessión para que tus datos se cargen actualizados\");window.location='../index.php';</script>";
        }
        die("Error description: " . mysqli_error($con));
    }

    public function checkUser($usu, $email) {
        include "conexion.php";
        $sql = "SELECT * FROM usuario WHERE usuario='$usu' or email='$email'";
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

    public function loadUser() {
        $state = false;
        include "conexion.php";
        $sql = "SELECT * FROM usuario WHERE (usuario='$this->user' or email='$this->email') and contrasenna='$this->password' ";
        if (!$query = $con->query($sql)) {
            echo("Error description: " . mysqli_error($con));
            return;
        }
        while ($row = $query->fetch_array()) {
            session_start();
            $_SESSION['ID'] = $row["id_usuario"];
            $_SESSION['NAME'] = $row["nombre"];
            $_SESSION['SURNAMEONE'] = $row["apellidoUno"];
            $_SESSION['SURNAMETWO'] = $row["apellidoDos"];
            $_SESSION['PICTURE'] = $row["foto"];
            $_SESSION['EMAIL'] = $row["email"];
            $_SESSION['USER'] = $row["usuario"];
            $_SESSION['PASSWORD'] = $row["contrasenna"];
            $_SESSION['TYPEUSER'] = "user";
            $_SESSION['AGE'] = $row["edad"];
            $_SESSION['LATITUD'] = $row["latitud"];
            $_SESSION['LONGITUD'] = $row["longitud"];
            $_SESSION["EDIT"] = "FALSE";
            $state = true;
        }
        return $state;
    }

}
