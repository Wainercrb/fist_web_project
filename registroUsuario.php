<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Registro usuario</title>
        <meta name="viewport" content="widt=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/headerFooter.css">
        <link rel="stylesheet" type="text/css" href="css/registroUsuario.css">
    </head>
    <body>
        <?php include "header.php" ?>
        <?php include "navbar.php" ?>
        <div class="container" id="main-conteint">
            <div class="row main">
                <div class="sub-containt">
                    <h3 id="title-form" align="center">Registrarse con:</h3>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <button type="submit" class="btn btn-primary center-block btn-login-facebook" id="btn-login-facebook">
                            <a href="/RegistroPersonal.html"><img src="img/facebook%20(2).png" onmouseover="this.width=70;this.height=70;" onmouseout="this.width=64;this.height=64;" width="64" height="64"></a>
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <button type="submit" class=" btn btn-primary center-block btn-ingresar-google" id="btn-ingresar-google"> <a href="/RegistroEmpresa.html" ><img src="img/google-plus%20(1).png" onmouseover="this.width=70;this.height=70;" onmouseout="this.width=64;this.height=64;" width="64" height="64"></a>
                            </button>
                        </div>
                    </div>
                    <h3 id="title-form" align="center">Paso a paso</h3>
                    <form role="form" action="php/registroUsuario.php" name="registroUsuario"  id="prospects_form" method="post" enctype="multipart/form-data">
                        <div class="group center-block">
                            <img id="blah" name="blah" class="center-block" src="" alt="" />
                            <input type="file" name="image" id="image" onchange="readURL(this);"/>
                            
                        </div>
                        <div class="form-group center-block" id="midiv">
                            <div class="group center-block">
                                <input id="txtName" type="text" name="txtName" required>
                                <span class="highlight"></span>
                                <!--label-->
                                <span class="bar"></span>
                                <!--botton del input-->
                                <label class="label" id="labelNombre">Nombre</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="group">
                                <input id="txtSurnameOne" type="text" name="txtSurnameOne" required/>
                                <span class="highlight"></span>
                                <!--label-->
                                <span class="bar"></span>
                                <!--botton del input-->
                                <label class="label" id="labelApellidoUno">Apellido Paterno</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="group">
                                <input id="txtSurnameTwo" type="text" name="txtSurnameTwo" required/>
                                <span class="highlight"></span>
                                <!--label-->
                                <span class="bar"></span>
                                <!--botton del input-->
                                <label class="label" id="txtApellidoDos">Apellido Materno</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="group">
                                <input id="txtEmail" type="eamil" name="txtEmail" required/>
                                <span class="highlight"></span>
                                <!--label-->
                                <span class="bar"></span>
                                <!--botton del input-->
                                <label class="label">Email</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="group">
                                <input id="txtAge" type="number" name="txtAge" required/>
                                <span class="highlight"></span>
                                <!--label-->
                                <span class="bar"></span>
                                <!--botton del input-->
                                <label class="label">Edad</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="group">
                                <input id="txtUser" type="text"  name="txtUser" required/>
                                <span class="highlight"></span>
                                <!--label-->
                                <span class="bar"></span>
                                <!--botton del input-->
                                <label class="label">Usuario</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="group">
                                <input id="txtPass" type="password" name="txtPass" required/>
                                <span class="highlight" id="a"></span>
                                <!--label-->
                                <span class="bar" id="a"></span>
                                <!--botton del input-->
                                <label class="label">Contraseña</label>
                                <span class="glyphicon glyphicon-eye-open pull-right" id="eye"></span>
                            </div>
                            <div class="group">
                                <input id="txtConfPass" type="password" name="txtConfPass" required/>
                                <span class="highlight"></span>
                                <!--label-->
                                <span class="bar"></span>
                                <!--botton del input-->
                                <label class="label"> Verifique la contraseña</label>
                                <span class="glyphicon glyphicon-eye-open pull-right" id="eye"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php
                            include "php/map.php";
                            ?>
                            <button type="button" class="center-block" onclick="getLocation()">Cargar mi ubicación</button>
                            <br>
                            <div id="map"></div>
                            <input id="txtLatitud" name="txtLatitud" ></input>
                            <input id="txtLongitud" name = "txtLongitud"></input>
                        </div>
                        <div class="control-group">
                            <h1 class="components">
                            <button id="btnGuardar" type="submit" class=" btn btn-primary center-block">
                            </button>
                            </h1>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include "footer.php"; ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/registroUsuario.js"></script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQFJdLinZ94oC6GJD3s_IuxhBJuPRgtjM&callback">
        </script>
    </body>
</html>