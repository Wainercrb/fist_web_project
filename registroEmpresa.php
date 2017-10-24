<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Registro empresa o vendedor</title>
        <meta name="viewport" content="widt=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/headerFooter.css">
        <link rel="stylesheet" type="text/css" href="css/registroVendedor.css">
    </head>
    <body>
        <?php include "header.php" ?>
        <?php include "navbar.php" ?>
        <div class="container" id="main-conteint">
            <div class="row main">
                <div class="sub-containt">
                    <h3 align="center">Registro empresa</h3>
                    <form role="form" action="php/registroEmpresa.php" name="registroUsuario"  id="prospects_form" method="post" enctype="multipart/form-data">
                        <div class="group center-block">
                            <img id="blah" name="blah" class="center-block" src="data:image/jpeg;base64,<?php echo base64_encode($store->getPicture());?>"  alt="" />
                            <input type="file" name="image" id="image" onchange="readURL(this);"/>
                        </div>
                        <div class="form-group">
                            <div class="group center-block">
                                <input type="text" id="txtName" name="txtName" REQUIRED>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label class="label" id="lblName">Nombre</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="group">
                                <input type="emil" id="txtEmail" name="txtEmail" REQUIRED/>
                                <span class="highlight"></span>
                                <!--label-->
                                <span class="bar"></span>
                                <!--botton del input-->
                                <label class="label" id="lblEmail">Email</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="group">
                                <input type="text" id="txtTel" name="txtTel" REQUIRED/>
                                <span class="highlight"></span>
                                <!--label-->
                                <span class="bar"></span>
                                <!--botton del input-->
                                <label class="label" id="lblTel">Teléfono</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="group">
                                <input type="number" id="txtTr" name="txtTr" REQUIRED/>
                                <span class="highlight"></span>
                                <!--label-->
                                <span class="bar"></span>
                                <!--botton del input-->
                                <label class="label" id="lblTr">Tárifa apartado</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="group">
                                <input type="text" id="txtUser" name="txtUser" REQUIRED/>
                                <span class="highlight"></span>
                                <!--label-->
                                <span class="bar"></span>
                                <!--botton del input-->
                                <label class="label" id="lblUser">Usuario</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="group">
                                <input type="password" id="txtPass" name="txtPass" REQUIRED/>
                                <span class="highlight"></span>
                                <!--label-->
                                <span class="bar"></span>
                                <!--botton del input-->
                                <label class="label" id="lblTxtPass">Contraseña</label>
                                <span class="glyphicon glyphicon-eye-open pull-right" id="eye"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="group">
                                <input type="password" id="txtConfPass" name="txtConfPass" REQUIRED/>
                                <span class="highlight"></span>
                                <!--label-->
                                <span class="bar"></span>
                                <!--botton del input-->
                                <label class="label" id="lblConfPass">Confirmación de contraseña</label>
                                <span class="glyphicon glyphicon-eye-open pull-right" id="eye"></span>
                            </div>
                        </div>
                        <!--combo de categorias-->
                        <div class="form-group" id="select-category-form">
                            <span id="select-cb" name="select-cb">Categoría</span>
                            <span class="select-group-button">
                                <select  id="radiusFrom" name="selectService" class="form-control selectCtFrom" type="select">
                                    <option id="option-select" value="Todas">Todas</option>
                                    <option id="option-select" value="Electrónica">Electrónica</option>
                                    <option id="option-select" value="Casa">Casa</option>
                                    <option id="option-select" value="jardin">jardin</option>
                                    <option id="option-select" value="Hobbit">Hobbit</option>
                                    <option id="option-select" value="Mascotas">Mascotas</option>
                                    <option id="option-select" value="Comida">Comida</option>
                                    <option id="option-select" value="Deportes">Deportes</option>
                                    <option id="option-select" value="Otro">Otro</option>
                                </select>
                            </span>
                        </div>
                        <!--div del mapa-->
                        <div class="form-group">
                            <?php
                            include "php/map.php";
                            ?>
                            <button type="button" class="center-block" onclick="getLocation()">Cargar mi ubicación</button>
                            <br>
                            <div id="map"></div>
                            <input id="txtLatitud" name="txtLatitud" ></input>
                            <input id="txtLongitud" name = "txtLongitud"></input>
                            <input id="archiveName" name = "archiveName">registroEmpresa.php</input>
                        </div>
                        <!--div de la galeria-->
                        <div class="form-group">
                            <div class="cols-sm-10">
                                <div class="carousel slide media-carousel" id="media">
                                    <div class="carousel-inner" id="media">
                                        <div class="item  active">
                                            <div class="row">
                                                <div class="cols-sm-10">
                                                    <a class="thumbnail" href="#"><img alt="" name="imgPro1" id="imgPro1" src = "img/click.jpg" width="280px" height="280px"></a>
                                                    <input type="file" name="image1" id="image1" onchange="readURLF1(this);"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class="cols-sm-10">
                                                    <a class="thumbnail" href="#"><img alt="" name="imgPro2" id="imgPro2" src = "img/click.jpg" width="280px" height="280px"></a>
                                                    <input type="file" name="image2" id="image2" onchange="readURLF2(this);"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class="cols-sm-10">
                                                    <a class="thumbnail" href="#"><img alt="" name="imgPro3" id="imgPro3" src = "img/click.jpg" width="280px" height="280px"></a>
                                                    <input type="file" name="image3" id="image3" onchange="readURLF3(this);"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
                                    <a data-slide="next" href="#media" class="right carousel-control">›</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <h1 class="components">
                            <button id="btnIngresar" type="submit" class=" btn btn-primary center-block"><img src="img/check-symbol.png" onmouseover="this.width=70;this.height=70;" onmouseout="this.width=64;this.height=64;" width="64" height="64">
                            </button>
                            </h1>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include "footer.php";?>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/registroEmpresa.js"></script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQFJdLinZ94oC6GJD3s_IuxhBJuPRgtjM&callback">
        </script>
    </body>
</html>