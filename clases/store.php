<?php
/**
*This is the class for the object person
*/
class store{
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
    function __construct()
    {
    }
      /*get and set for $id_shop*/
    public function getId_shop()
    {
        return $this->id_shop;
    }
    public function setId_shop($id_shop)
    {
        return $this->id_shop = $id_shop;
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
    /*get and set for $phone*/
    public function getPhone()
    {
        return $this->phone;
    }
    public function setPhone($phone)
    {
        return $this->phone = $phone;
    }
    /*get and set for $rate*/
    public function getRate()
    {
        return $this->rate;
    }
    public function setRate($rate)
    {
        return $this->rate = $rate;
    }
      /*get and set for $service*/
    public function getService()
    {
        return $this->service;
    }
    public function setService($service)
    {
        return $this->service = $service;
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
    /*get and set for $picture -> this are main user profile*/
    public function getPicture()
    {
        return $this->picture;
    }
    public function setPicture($picture)
    {
        return $this->picture = $picture;
    }
    /*get and set for $pictureOne -> this are user picture profile*/
    public function getPictureOne()
    {
        return $this->pictureOne;
    }
    public function setPictureOne($pictureOne)
    {
        return $this->pictureOne = $pictureOne;
    }
    /*get and set for $pictureTwo -> this are user picture profile*/
    public function getPictureTwo()
    {
        return $this->pictureTwo;
    }
    public function setPictureTwo($pictureTwo)
    {
        return $this->pictureTwo = $pictureTwo;
    }
    /*get and set for $pictureThere -> this are user picture profile*/
    public function getPictureThere()
    {
        return $this->pictureThere;
    }
    public function setPictureThere($pictureThere)
    {
        return $this->pictureThere = $pictureThere;
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
    public function setLongitud($longitud)
    {
        return $this->longitud = $longitud;
    }
    public function saveStore(){
        include "conexion.php";
            $data  = file_get_contents($this->picture['tmp_name']);
            $data  = mysql_real_escape_string($data);
            $data1 = file_get_contents($this->pictureOne['tmp_name']);
            $data1 = mysql_real_escape_string($data1);
            $data2 = file_get_contents($this->pictureTwo['tmp_name']);
            $data2 = mysql_real_escape_string($data2);
            $data3 = file_get_contents($this->pictureThere['tmp_name']);
            $data3 = mysql_real_escape_string($data3);
            $sql   = "INSERT INTO tienda(nombre, telefono, tarifa_apartado, servicio, usuario, contrasenna, email, foto, foto1, foto2, foto3, latitud, longitud) value ('$this->name','$this->phpne','$this->rate','$this->service','$this->user','$this->password','$this->email','$data','$data1','$data2','$data3','$this->latitud','$this->longitud')";
            if($con->query($sql))
            {
            $con->close();
            print "<script>alert(\"Bien. Su usuario se guardo correctamente ;-)\");window.location='../registroUsuario.php';</script>";
            }else{
            echo("Error description: " . mysqli_error($con));
        }
    }

    public function editStore($id){
        $data = file_get_contents($this->picture['tmp_name']);
        $data = mysql_real_escape_string($data);
        $sql = "UPDATE usuario SET nombre = '$this->name', apellidoUno = '$this->surnameOne', apellidoDos = '$this->surnameTwo', foto = '$data', email = '$this->email', edad = '$this->age', usuario = '$this->user', contrasenna = '$this->password', latitud = '$this->latitud', longitud = '$this->longitud' WHERE  id_usuario = $id";
            if($con->query($sql))
            {
            $con->close();    
            print "<script>alert(\"Bien. Su usuario se actualizo correctamente ;-)\");window.location='../registroUsuario.php';</script>";
            }
            echo("Error description: " . mysqli_error($con));
    }
    public function checkUser($usu, $email){
            include "conexion.php";
            $sql= "SELECT * FROM tienda WHERE usuario='$usu' or email='$email'";
            if(!$query = $con->query($sql))
            {
            echo("Error description: " . mysqli_error($con));
            return;
            }
            while ($r=$query->fetch_array())
            {
            $con->close();
            return true;
            }
            $con->close();
            return false;
    }
    public function loadShop(){
        $state = false;
        include "conexion.php";
            $sql="SELECT * FROM tienda WHERE (usuario='$this->user' or email='$this->email') and contrasenna='$this->password'";
            if(!$query = $con->query($sql))
            {
            echo("Error description: " . mysqli_error($con));
            return;
            }
            while ($row = $query->fetch_array()) {
                session_start();
                $_SESSION['ID'] = $row["id_tienda"];
                $_SESSION['FULLNAME'] = $row["nombre"];
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