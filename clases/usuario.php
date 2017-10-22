<?php
/**
*This is the class for the object person
*/
class user{
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
    function __construct($name, $surnameOne, $surnameTwo, $email, $picture, $age, $user, $password, $latitud, $longitud)
    {
        $this->name = $name;
        $this->surnameOne =  $surnameOne;
        $this->surnameTwo = $surnameTwo;
        $this->email = $email;
        $this->picture = $picture;
        $this->age = $age;
        $this->user = $user;
        $this->password = $password;
        $this->latitud = $latitud;
        $this->longitud = $longitud;
    }
    /*get and set for $name*/
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        return $this->name = $name;
    }
    /*get and set for surname one*/
    public function getSurnameOne()
    {
        return $this->surnameOne;
    }
    public function setSurnameOne($surnameOne)
    {
        return $this->surnameOne = $surnameOne;
    }
    /*get and set for surname two*/
    public function getSurnameTwo(){
        return $this->surnameTwo;
    }
    public function setSurnameTwo($surnameTwo)
    {
        return $this->surnameTwo = $surnameTwo;
    }
    /*get and set for $email*/ 
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        return $this->email = $email;
    }
       /*get and set for $picture -> this are user picture profile*/
    public function getPicture()
    {
        return $this->picture;
    }
    public function setPicture($picture)
    {
        return $this->picture = $picture;
    }
    /*get and set of $user*/
    public function getUser()
    {
        return $this->user;
    }
    public function setUser($user)
    {
        return $this->user = $user;
    }
    /*get and set for $password*/
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        return $this->password = $password;
    }
    /*get and set for $latitud*/
    public function getLatitud()
    {
        return $this->latitud;
    }
    public function setLatitud($latitud)
    {
        return $this->latitud = $latitud;
    }
    /*get and set for $longitud*/
    public function getLongitud()
    {
        return $this->longitud;
    }
    public function setLogitud($longitud)
    {
        return $this->longitud = $longitud;
    }
    public function saveUser(){
      include "conexion.php";
            $data = file_get_contents($this->picture['tmp_name']);
            $data = mysql_real_escape_string($data);
            $sql = "INSERT INTO usuario(nombre, apellidoUno, apellidoDos, foto, email, edad, usuario, contrasenna, latitud, longitud) value ('$this->name','$this->surnameOne','$this->surnameTwo','$data','$this->email','$this->age','$this->user','$this->password','$this->latitud','$this->longitud')";
            if($con->query($sql))
            {
             print "<script>alert(\"Bien. Su usuario se guardo correctamente ;-)\");window.location='../registroUsuario.php';</script>";
            }else{
             echo("Error description: " . mysqli_error($con));
        }
    }

    public function editUser($user, $id){
        $data = file_get_contents($this->picture['tmp_name']);
        $data = mysql_real_escape_string($data);
        $sql = "UPDATE usuario SET nombre = '$user->name', apellidoUno = '$user->surnameOne', apellidoDos = '$user->surnameTwo', foto = '$data', email = '$user->email', edad = '$user->age', usuario = '$user->user', contrasenna = '$user->password', latitud = '$user->latitud', longitud = '$user->longitud' WHERE  id_usuario = $id";
            if($con->query($sql))
            {
            print "<script>alert(\"Bien. Su usuario se actualizo correctamente ;-)\");window.location='../registroUsuario.php';</script>";
            }
            echo("Error description: " . mysqli_error($con));

    }
    public function checkUser($usu, $email){
            include "conexion.php";
            $sql= "SELECT * FROM usuario WHERE usuario='$usu' or email='$email'";
            if(!$query = $con->query($sql))
            {
            echo("Error description: " . mysqli_error($con));
            return;
            }
            while ($r=$query->fetch_array())
            {
            return true;
            }
            return false;
    }
}