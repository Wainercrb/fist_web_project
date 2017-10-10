<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>ingrese</title>
        <meta name="viewport" content="widt=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/headerFooter.css">
        <link rel="stylesheet" type="text/css" href="css/ingresar.css">
    </head>
    <body>
        <div id="top">
            <div class="container">
                <div class="col-md-6 offer" data-animate="fadeInDown">
                    <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Oferta del día</a> <a href="#">Aprovecha el 35% de rebaja en ropa de niño</a>
                </div>
                <div class="col-md-6" data-animate="fadeInDown">
                    <ul class="menu">
                        <li><a href="/Nosotros.html">Nosotros</a>
                    </li>
                    <li><a href="TiposPerfil.html">Tipos de perfil</a>
                </li>
                <li><a href="ingresar.html">Login</a>
            </li>
            <li><a id="addProduct" class="btn btn-success btn-sm" data-animate-hover="shake">Nuevo producto</a>
        </li>
    </ul>
</div>
</div>
</div>
<!--Inicia la parte del banner-->
<nav class="navbar navbar-default" role="navigation">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html"><img src="img/logo%20-%20copia.jpg" width="50px" height="50px"></a>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="navbar-collapse style= collapse in" id="bs-megadropdown-tabs" style="padding-left: 0px;">
    <form class="navbar-form navbar-left" role="search" height="10px" action="php/ingresoLogin.php" name="insert"   method="post" enctype="multipart/form-data">
        <div class="form-group div-search ">
            <div class="input-group input-group-lg input-group-full search">
                <input type="text" class="form-control" id="btn-search" aria-label="Search" size="100">
                <div class="input-group-btn">
                    <div class="btn btn-default">
                        <select id="selectCategoriaBuscar" class="form-control select">
                            <option value="">Todas</option>
                            <option value="">Hombre</option>
                            <option value="">Mujeres</option>
                            <option value="">Niños</option>
                            <option value="">Casa</option>
                            <option value="">Jardin</option>
                            <option value="">Motores</option>
                            <option value="">Honits</option>
                            <option value="">Consolas</option>
                            <option value="">Otros</option>
                        </select>
                    </div>
                    <div class="btn btn-default second-select">
                        <select  id="selectDistancia" class="form-control select second-select">
                            <option value="5">5km</option>
                            <option value="10">10km</option>
                            <option value="20">20km</option>
                            <option value="30">30km</option>
                            <option value="40">40km</option>
                            <option value="50">50km</option>
                            <option value="60">+km</option>
                        </select>
                    </div>
                    <button id="btnNavBuscar" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true" id="span-buscar" onclick="insert()"></span></button>
                </div>
            </div>
        </div>
    </form>
    <ul class="nav navbar-nav navbar-right" id="navbar-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-user"></span>
                <strong>Usuario</strong>
                <span class="glyphicon glyphicon-chevron-down"></span>
            </a>
            <ul style="background-color:white;" class="dropdown-menu">
                <li>
                    <div class="navbar-login div-position">
                        <div class="row">
                            <div class="col-lg-4">
                                <p class="text-center">
                                    <img id="profile-img" class="center-block" src="img/img-profile.jpg" />
                                </p>
                            </div>
                            <div class="col-lg-8">
                                <p class="text-center"><strong id="headerName">Nombre Apellido</strong></p>
                                <p class="text-center small" id="headerEmail">correoElectronico@email.com</p>
                                <p class="text-center">
                                    <a id="btnIngresarPerfil" class="btn btn-primary btn-block btn-sm">ver mi perfil</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="divider"></li>
                <li>
                    <div class="navbar-login navbar-login-session div-position">
                        <div class="row">
                            <div class="col-lg-12">
                                <p>
                                    <a id="btnCerrarCesion" class="btn btn-danger btn-block btn-sm">Cerrar Sesion</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ingresar<span class="caret"></span></a>
            <ul id="login-dp" class="dropdown-menu">
                <li>
                    <div class="row">
                        <div class="col-lg-12 second-div text-center">
                            Registrar como
                            <div class="social-buttons">
                                <a href="VerPerfil.html" class="btn btn-primary">Usuario</a>
                                <a href="VerPerfilEmpresa.html" class="btn btn-primary">Empresa</a>
                            </div>
                            <h2 id="h2">Ingreso rápido</h2>
                            <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail2">Usuario</label>
                                    <input type="text" class="form-control" id="txt-usuario" placeholder="Usuario" required="">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputPassword2">Contraseña</label>
                                    <input type="password" class="form-control" id="txt-contrasena" placeholder="Contraseña" required="">
                                    <div id="btnOlvidoContrasena"  class="help-block text-center"><a href="#">Olvido su contraseña?</a></div>
                                </div>
                                <div class="form-group">
                                    <button type="button" id="btn-ingresar-navbar" class="btn btn-primary btn-block">Ingresar</button>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="input-checkbox-loginc"> Recordarme!
                                    </label>
                                </div>
                            </form>
                        </div>
                        <div class="bottom text-center">
                            ¿eliminar tu cuenta? <a><b id="btnEliminarClienta">click</b></a>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</div>
<!-- /.navbar-collapse -->
</div>
<!-- /.container-fluid -->
</nav>
<!--Termina la parte del banner-->
<!--Inicia la parte del menú-->
<!--sub-banner del menu de gategorias-->
<div class="container">
<nav class="navbar navbar-inverse">
<div class="navbar-header">
    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <!--Contenedor que guarda las diferentes opciones del menu-->
</div>
<div class="collapse navbar-collapse js-navbar-collapse ">
    <ul class="nav navbar-nav">
        <li class="dropdown mega-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Moda<span class="caret"></span></a>
            <ul class="dropdown-menu mega-dropdown-menu">
                <li class="col-sm-3">
                    <ul>
                        <li class="dropdown-header">Galeria</li>
                        <div id="menCollection" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <!--Muesta la primera imagen de la galeria con toda la información-->
                                <div class="item active">
                                    <a href="#"><img src="https://4.bp.blogspot.com/-DF0_xCxLP8Y/WBBeUyE3TqI/AAAAAAAANCI/GoWjLtqeAqUOao4L1iCeSuQnnMlXRyZswCLcB/s640/BEBE-VARON-ROPA-INFANTIL.jpg" class="img-responsive" alt="product 1"></a>
                                    <h4><small>Ropa para niños:</small></h4>
                                    <button class="btn btn-primary" type="button">₡10,000.00
                                    </button>
                                    <button href="" class="btn btn-default" type="button"><span class="glyphicon glyphicon-earphone"></span> 61250382
                                    </button>
                                </div>
                                <!--Muesta la segunda imagen de la galeria con toda la información-->
                                <div class="item">
                                    <a href="#"><img src="http://www.modamarcas.com/wp-content/uploads/sites/7/2010/07/ropa-benetton-adultos.jpeg" class="img-responsive" alt="product 2"></a>
                                    <h4><small>Ropa para adultos</small></h4>
                                    <button class="btn btn-primary" type="button">₡5,000.00
                                    </button>
                                    <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-earphonet"></span>61250382
                                    </button>
                                </div>
                                <!--Muesta la tercera imagen de la galeria con toda la información-->
                                <div class="item">
                                    <a href="#"><img src="http://meridia.mx/wp-content/uploads/2015/02/ropaasdultosmayores.jpg" class="img-responsive" alt="product 3"></a>
                                    <h4><small>Ropa para adultos mayores</small></h4>
                                    <button class="btn btn-primary" type="button">₡20,000.00
                                    </button>
                                    <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-earphone"></span>61250382
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--Muestra una linea divisora-->
                        <li class="divider"></li>
                        <!--lleva a la tienda con la infomación de la galeria-->
                        <li><a href="#">Más información<span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                    </ul>
                </li>
                <!--Las siguientes listas son las que se muestran en el menu de cagorias en la opcion de moda-->
                <li class="col-sm-3">
                    <ul>
                        <li class="dropdown-header">Camisas</li>
                        <li><a href="">Camisas para hombres</a></li>
                        <li><a href="">Camisas para mujeres</a></li>
                        <li><a href="">Camisas para niños</a></li>
                        <li><a href="">Camisas de niñas</a></li>
                        <li class="divider" max-width="10"></li>
                        <li class="dropdown-header">Pantalones</li>
                        <li><a href="">Pantalones para hombres</a></li>
                        <li><a href="">Pantalones para mujeres</a></li>
                        <li><a href="">Pantalones para niños</a></li>
                        <li><a href="">Pantalones para niñas</a></li>
                    </ul>
                </li>
                <li class="col-sm-3">
                    <ul>
                        <li class="dropdown-header">Calzado</li>
                        <li><a href="">Calzado para hombres</a></li>
                        <li><a href="">Calzado para mujeres</a></li>
                        <li><a href="">Calzado para niños</a></li>
                        <li><a href="">Calzado para niñas</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Gorros y sombreros</li>
                        <li><a href="">Gorros y sombreros para hombres</a></li>
                        <li><a href="">Gorros y sombreros para mujeres</a></li>
                        <li><a href="">Gorros y sombreros para niños</a></li>
                        <li><a href="">Gorros y sombreros para niñas</a></li>
                    </ul>
                </li>
                <li class="col-sm-3">
                    <ul>
                        <li class="dropdown-header">Medias</li>
                        <li><a href="">Medias para hombres</a></li>
                        <li><a href="">Medias para mujeres</a></li>
                        <li><a href="">Medias para niños</a></li>
                        <li><a href="">Medias para niñas</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Otros</li>
                        <li><a href="">Otros accesorios hombres</a></li>
                        <li><a href="">Otros accesorios para mujeres</a></li>
                        <li><a href="">Otros accesorios para niños</a></li>
                        <li><a href="">Otros accesorios para niñas</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <!--seguntado tab del menu-->
        <ul class="nav navbar-nav">
            <li class="dropdown mega-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Electrónica<span class="caret"></span></a>
                <ul class="dropdown-menu mega-dropdown-menu">
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Dispositivos</li>
                            <li><a href="">Tables</a></li>
                            <li><a href="">Portátiles</a></li>
                            <li><a href="">Ordenadores</a></li>
                            <li><a href="">Cédulares</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Accesorias para dispositivos </li>
                            <li><a href="">Accesorios para tables</a></li>
                            <li><a href="">Accesorios para portátiles</a></li>
                            <li><a href="">Accesorios para denadores</a></li>
                            <li><a href="">Accesorios para cédulares</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Consolas</li>
                            <li><a href="">Xbox</a></li>
                            <li><a href="">Play station</a></li>
                            <li><a href="">Wii</a></li>
                            <li><a href="">Nintendo</a></li>
                            <li><a href="">Otras</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Accesorias para consolas</li>
                            <li><a href="">Accesorios para xbox</a></li>
                            <li><a href="">Accesorios para play station</a></li>
                            <li><a href="">Accesorios para wii</a></li>
                            <li><a href="">Accesorios para nintendo</a></li>
                            <li><a href="">Otros accesorios para consola</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Video juegos</li>
                            <li><a href="">Juegos para pc</a></li>
                            <li><a href="">Juegos para xbox</a></li>
                            <li><a href="">Juegos para play station </a></li>
                            <li><a href="">Juegos para Wii</a></li>
                            <li><a href="">Juegos para Nintendo</a></li>
                            <li><a href="">Juegos para poli</a></li>
                            <li><a href="">Juegos para  ZAPiT Game</a></li>
                            <li><a href="">Otros juegos</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Promoción del mes</li>
                            <div id="womenCollection" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <!--primara imagen de la galeria de fotos de electronica-->
                                        <a href="#"><img src="http://img1.meristation.as.com/files/imagenes/general/playstation-5-ps5-console-sony-rumeurs-prix.jpg" class="img-responsive" alt="product 1"></a>
                                        <h4><small>Play 5</small></h4>
                                        <button class="btn btn-primary" type="button">₡10,000.00
                                        </button>
                                        <button href="" class="btn btn-default" type="button"><span class="glyphicon glyphicon-earphone"></span> 61250382
                                        </button>
                                    </div>
                                    <!--segunda imagen de la galeria de fotos de electronica-->
                                    <div class="item">
                                        <a href="#"><img src="http://cdn.images.dailystar.co.uk/dynamic/184/photos/106000/Xbox-360-Console-497106.jpg" class="img-responsive" alt="product 2"></a>
                                        <h4><small>Xbox</small></h4>
                                        <button class="btn btn-primary" type="button">₡20,000.00
                                        </button>
                                        <button href="" class="btn btn-default" type="button"><span class="glyphicon glyphicon-earphone"></span> 61250382
                                        </button>
                                    </div>
                                    <!--tercera imagen de la galeria de fotos de electronica-->
                                    <div class="item">
                                        <a href="#"><img src="https://fthmb.tqn.com/vPThtvnPxir7fahvXXW3GpCLHNo=/1280x960/filters:no_upscale():fill(FFCC00,1)/about/wii-game-console-56a6ac7d3df78cf7728fa8b9.jpg" class="img-responsive" alt="product 3"></a>
                                        <h4><small>Wii</small></h4>
                                        <button class="btn btn-primary" type="button">₡15,000.00
                                        </button>
                                        <button href="" class="btn btn-default" type="button"><span class="glyphicon glyphicon-earphone"></span> 61250382
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!--muestra una pequeña linea para dividir-->
                            <li class="divider"></li>
                            <!--lleva a la infación de la tienda de esos productos-->
                            <li><a href="#">Más informacion <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <!--Tercer tab del menú-->
        <ul class="nav navbar-nav">
            <li class="dropdown mega-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Moda<span class="caret"></span></a>
                <ul class="dropdown-menu mega-dropdown-menu">
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Galeria</li>
                            <div id="menCollection" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <!--Muesta la primera imagen de la galeria con toda la información-->
                                    <div class="item active">
                                        <a href="#"><img src="https://4.bp.blogspot.com/-DF0_xCxLP8Y/WBBeUyE3TqI/AAAAAAAANCI/GoWjLtqeAqUOao4L1iCeSuQnnMlXRyZswCLcB/s640/BEBE-VARON-ROPA-INFANTIL.jpg" class="img-responsive" alt="product 1"></a>
                                        <h4><small>Ropa para niños:</small></h4>
                                        <button class="btn btn-primary" type="button">₡10,000.00
                                        </button>
                                        <button href="" class="btn btn-default" type="button"><span class="glyphicon glyphicon-earphone"></span> 61250382
                                        </button>
                                    </div>
                                    <!--Muesta la segunda imagen de la galeria con toda la información-->
                                    <div class="item">
                                        <a href="#"><img src="http://www.modamarcas.com/wp-content/uploads/sites/7/2010/07/ropa-benetton-adultos.jpeg" class="img-responsive" alt="product 2"></a>
                                        <h4><small>Ropa para adultos</small></h4>
                                        <button class="btn btn-primary" type="button">₡5,000.00
                                        </button>
                                        <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-earphonet"></span>61250382
                                        </button>
                                    </div>
                                    <!--Muesta la tercera imagen de la galeria con toda la información-->
                                    <div class="item">
                                        <a href="#"><img src="http://meridia.mx/wp-content/uploads/2015/02/ropaasdultosmayores.jpg" class="img-responsive" alt="product 3"></a>
                                        <h4><small>Ropa para adultos mayores</small></h4>
                                        <button class="btn btn-primary" type="button">₡20,000.00
                                        </button>
                                        <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-earphone"></span>61250382
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Muestra una quequeña linea divisora -->
                            <li class="divider"></li>
                            <!--lleva a la tienda con la infomación de la galeria-->
                            <li><a href="#">Más información<span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                        </ul>
                    </li>
                    <!--Las siguientes listas son las que se muestran en el menu de cagorias en la opcion de moda-->
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Camisas</li>
                            <li><a href="">Camisas para hombres</a></li>
                            <li><a href="">Camisas para mujeres</a></li>
                            <li><a href="">Camisas para niños</a></li>
                            <li><a href="">Camisas de niñas</a></li>
                            <li class="divider" max-width="10"></li>
                            <li class="dropdown-header">Pantalones</li>
                            <li><a href="">Pantalones para hombres</a></li>
                            <li><a href="">Pantalones para mujeres</a></li>
                            <li><a href="">Pantalones para niños</a></li>
                            <li><a href="">Pantalones para niñas</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Calzado</li>
                            <li><a href="">Calzado para hombres</a></li>
                            <li><a href="">Calzado para mujeres</a></li>
                            <li><a href="">Calzado para niños</a></li>
                            <li><a href="">Calzado para niñas</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Gorros y sombreros</li>
                            <li><a href="">Gorros y sombreros para hombres</a></li>
                            <li><a href="">Gorros y sombreros para mujeres</a></li>
                            <li><a href="">Gorros y sombreros para niños</a></li>
                            <li><a href="">Gorros y sombreros para niñas</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Medias</li>
                            <li><a href="">Medias para hombres</a></li>
                            <li><a href="">Medias para mujeres</a></li>
                            <li><a href="">Medias para niños</a></li>
                            <li><a href="">Medias para niñas</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Otros</li>
                            <li><a href="">Otros accesorios hombres</a></li>
                            <li><a href="">Otros accesorios para mujeres</a></li>
                            <li><a href="">Otros accesorios para niños</a></li>
                            <li><a href="">Otros accesorios para niñas</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- cuarto tab menu-->
        <ul class="nav navbar-nav">
            <li class="dropdown mega-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Electrónica<span class="caret"></span></a>
                <ul class="dropdown-menu mega-dropdown-menu">
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Dispositivos</li>
                            <li><a href="">Tables</a></li>
                            <li><a href="">Portátiles</a></li>
                            <li><a href="">Ordenadores</a></li>
                            <li><a href="">Cédulares</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Accesorias para dispositivos </li>
                            <li><a href="">Accesorios para tables</a></li>
                            <li><a href="">Accesorios para portátiles</a></li>
                            <li><a href="">Accesorios para denadores</a></li>
                            <li><a href="">Accesorios para cédulares</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Consolas</li>
                            <li><a href="">Xbox</a></li>
                            <li><a href="">Play station</a></li>
                            <li><a href="">Wii</a></li>
                            <li><a href="">Nintendo</a></li>
                            <li><a href="">Otras</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Accesorias para consolas</li>
                            <li><a href="">Accesorios para xbox</a></li>
                            <li><a href="">Accesorios para play station</a></li>
                            <li><a href="">Accesorios para wii</a></li>
                            <li><a href="">Accesorios para nintendo</a></li>
                            <li><a href="">Otros accesorios para consola</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Video juegos</li>
                            <li><a href="">Juegos para pc</a></li>
                            <li><a href="">Juegos para xbox</a></li>
                            <li><a href="">Juegos para play station </a></li>
                            <li><a href="">Juegos para Wii</a></li>
                            <li><a href="">Juegos para Nintendo</a></li>
                            <li><a href="">Juegos para poli</a></li>
                            <li><a href="">Juegos para  ZAPiT Game</a></li>
                            <li><a href="">Otros juegos</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Promoción del mes</li>
                            <div id="womenCollection" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <!--primara imagen de la galeria de fotos de electronica-->
                                        <a href="#"><img src="http://img1.meristation.as.com/files/imagenes/general/playstation-5-ps5-console-sony-rumeurs-prix.jpg" class="img-responsive" alt="product 1"></a>
                                        <h4><small>Play 5</small></h4>
                                        <button class="btn btn-primary" type="button">₡10,000.00
                                        </button>
                                        <button href="" class="btn btn-default" type="button"><span class="glyphicon glyphicon-earphone"></span> 61250382
                                        </button>
                                    </div>
                                    <!--segunda imagen de la galeria de fotos de electronica-->
                                    <div class="item">
                                        <a href="#"><img src="http://cdn.images.dailystar.co.uk/dynamic/184/photos/106000/Xbox-360-Console-497106.jpg" class="img-responsive" alt="product 2"></a>
                                        <h4><small>Xbox</small></h4>
                                        <button class="btn btn-primary" type="button">₡20,000.00
                                        </button>
                                        <button href="" class="btn btn-default" type="button"><span class="glyphicon glyphicon-earphone"></span> 61250382
                                        </button>
                                    </div>
                                    <!--tercera imagen de la galeria de fotos de electronica-->
                                    <div class="item">
                                        <a href="#"><img src="https://fthmb.tqn.com/vPThtvnPxir7fahvXXW3GpCLHNo=/1280x960/filters:no_upscale():fill(FFCC00,1)/about/wii-game-console-56a6ac7d3df78cf7728fa8b9.jpg" class="img-responsive" alt="product 3"></a>
                                        <h4><small>Wii</small></h4>
                                        <button class="btn btn-primary" type="button">₡15,000.00
                                        </button>
                                        <button href="" class="btn btn-default" type="button"><span class="glyphicon glyphicon-earphone"></span> 61250382
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!--Muestra una quequeña linea divisora-->
                            <li class="divider"></li>
                            <!--lleva a la infación de la tienda de esos productos-->
                            <li><a href="#">Más informacion <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <!--Quinto tab-->
        <ul class="nav navbar-nav">
            <li class="dropdown mega-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Moda<span class="caret"></span></a>
                <ul class="dropdown-menu mega-dropdown-menu">
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Galeria</li>
                            <div id="menCollection" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <!--Muesta la primera imagen de la galeria con toda la información-->
                                    <div class="item active">
                                        <a href="#"><img src="https://4.bp.blogspot.com/-DF0_xCxLP8Y/WBBeUyE3TqI/AAAAAAAANCI/GoWjLtqeAqUOao4L1iCeSuQnnMlXRyZswCLcB/s640/BEBE-VARON-ROPA-INFANTIL.jpg" class="img-responsive" alt="product 1"></a>
                                        <h4><small>Ropa para niños:</small></h4>
                                        <button class="btn btn-primary" type="button">₡10,000.00
                                        </button>
                                        <button href="" class="btn btn-default" type="button"><span class="glyphicon glyphicon-earphone"></span> 61250382
                                        </button>
                                    </div>
                                    <!--Muesta la segunda imagen de la galeria con toda la información-->
                                    <div class="item">
                                        <a href="#"><img src="http://www.modamarcas.com/wp-content/uploads/sites/7/2010/07/ropa-benetton-adultos.jpeg" class="img-responsive" alt="product 2"></a>
                                        <h4><small>Ropa para adultos</small></h4>
                                        <button class="btn btn-primary" type="button">₡5,000.00
                                        </button>
                                        <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-earphonet"></span>61250382
                                        </button>
                                    </div>
                                    <!--Muesta la tercera imagen de la galeria con toda la información-->
                                    <div class="item">
                                        <a href="#"><img src="http://meridia.mx/wp-content/uploads/2015/02/ropaasdultosmayores.jpg" class="img-responsive" alt="product 3"></a>
                                        <h4><small>Ropa para adultos mayores</small></h4>
                                        <button class="btn btn-primary" type="button">₡20,000.00
                                        </button>
                                        <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-earphone"></span>61250382
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Muestra una quepeña linea divisora -->
                            <li class="divider"></li>
                            <!--lleva a la tienda con la infomación de la galeria-->
                            <li><a href="#">Más información<span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                        </ul>
                    </li>
                    <!--Las siguientes listas son las que se muestran en el menu de cagorias en la opcion de moda-->
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Camisas</li>
                            <li><a href="">Camisas para hombres</a></li>
                            <li><a href="">Camisas para mujeres</a></li>
                            <li><a href="">Camisas para niños</a></li>
                            <li><a href="">Camisas de niñas</a></li>
                            <li class="divider" max-width="10"></li>
                            <li class="dropdown-header">Pantalones</li>
                            <li><a href="">Pantalones para hombres</a></li>
                            <li><a href="">Pantalones para mujeres</a></li>
                            <li><a href="">Pantalones para niños</a></li>
                            <li><a href="">Pantalones para niñas</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Calzado</li>
                            <li><a href="">Calzado para hombres</a></li>
                            <li><a href="">Calzado para mujeres</a></li>
                            <li><a href="">Calzado para niños</a></li>
                            <li><a href="">Calzado para niñas</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Gorros y sombreros</li>
                            <li><a href="">Gorros y sombreros para hombres</a></li>
                            <li><a href="">Gorros y sombreros para mujeres</a></li>
                            <li><a href="">Gorros y sombreros para niños</a></li>
                            <li><a href="">Gorros y sombreros para niñas</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Medias</li>
                            <li><a href="">Medias para hombres</a></li>
                            <li><a href="">Medias para mujeres</a></li>
                            <li><a href="">Medias para niños</a></li>
                            <li><a href="">Medias para niñas</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Otros</li>
                            <li><a href="">Otros accesorios hombres</a></li>
                            <li><a href="">Otros accesorios para mujeres</a></li>
                            <li><a href="">Otros accesorios para niños</a></li>
                            <li><a href="">Otros accesorios para niñas</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!--sexto tab-->
            <ul class="nav navbar-nav">
                <li class="dropdown mega-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Electrónica<span class="caret"></span></a>
                    <ul class="dropdown-menu mega-dropdown-menu">
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Dispositivos</li>
                                <li><a href="">Tables</a></li>
                                <li><a href="">Portátiles</a></li>
                                <li><a href="">Ordenadores</a></li>
                                <li><a href="">Cédulares</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Accesorias para dispositivos </li>
                                <li><a href="">Accesorios para tables</a></li>
                                <li><a href="">Accesorios para portátiles</a></li>
                                <li><a href="">Accesorios para denadores</a></li>
                                <li><a href="">Accesorios para cédulares</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Consolas</li>
                                <li><a href="">Xbox</a></li>
                                <li><a href="">Play station</a></li>
                                <li><a href="">Wii</a></li>
                                <li><a href="">Nintendo</a></li>
                                <li><a href="">Otras</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Accesorias para consolas</li>
                                <li><a href="">Accesorios para xbox</a></li>
                                <li><a href="">Accesorios para play station</a></li>
                                <li><a href="">Accesorios para wii</a></li>
                                <li><a href="">Accesorios para nintendo</a></li>
                                <li><a href="">Otros accesorios para consola</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Video juegos</li>
                                <li><a href="">Juegos para pc</a></li>
                                <li><a href="">Juegos para xbox</a></li>
                                <li><a href="">Juegos para play station </a></li>
                                <li><a href="">Juegos para Wii</a></li>
                                <li><a href="">Juegos para Nintendo</a></li>
                                <li><a href="">Juegos para poli</a></li>
                                <li><a href="">Juegos para  ZAPiT Game</a></li>
                                <li><a href="">Otros juegos</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Promoción del mes</li>
                                <div id="womenCollection" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <!--primara imagen de la galeria de fotos de electronica-->
                                            <a href="#"><img src="http://img1.meristation.as.com/files/imagenes/general/playstation-5-ps5-console-sony-rumeurs-prix.jpg" class="img-responsive" alt="product 1"></a>
                                            <h4><small>Play 5</small></h4>
                                            <button class="btn btn-primary" type="button">₡10,000.00</button> <button href="" class="btn btn-default" type="button"><span class="glyphicon glyphicon-earphone"></span> 61250382</button>
                                        </div>
                                        <!--segunda imagen de la galeria de fotos de electronica-->
                                        <div class="item">
                                            <a href="#"><img src="http://cdn.images.dailystar.co.uk/dynamic/184/photos/106000/Xbox-360-Console-497106.jpg" class="img-responsive" alt="product 2"></a>
                                            <h4><small>Xbox</small></h4>
                                            <button class="btn btn-primary" type="button">₡20,000.00</button> <button href="" class="btn btn-default" type="button"><span class="glyphicon glyphicon-earphone"></span> 61250382</button>
                                        </div>
                                        <!--tercera imagen de la galeria de fotos de electronica-->
                                        <div class="item">
                                            <a href="#"><img src="https://fthmb.tqn.com/vPThtvnPxir7fahvXXW3GpCLHNo=/1280x960/filters:no_upscale():fill(FFCC00,1)/about/wii-game-console-56a6ac7d3df78cf7728fa8b9.jpg" class="img-responsive" alt="product 3"></a>
                                            <h4><small>Wii</small></h4>
                                            <button class="btn btn-primary" type="button">₡15,000.00</button><button href="" class="btn btn-default" type="button"><span class="glyphicon glyphicon-earphone"></span> 61250382</button>
                                        </div>
                                    </div>
                                </div>
                                <li class="divider"></li>
                                <!--lleva a la infación de la tienda de esos productos-->
                                <li><a href="#">Más informacion <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </ul>
        <li><a href="#">tab #3</a></li>
        <li><a href="#">tab #4</a></li>
        <li><a href="#">tab #5</a></li>
        <li><a href="#">tab #6</a></li>
        <li><a href="#">tab #7</a></li>
        <li><a href="#">tab #8</a></li>
    </ul>
</div>
</nav>
</div>
<!--Termina la parte del menú-->
<!--Inicia la parte del contenido-->
<div class="container" id="login-conteint">
<div class="row main">
<div class="main-login" id="conte">
    <h3>Registrarse como</h3>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <a href="/RegistroPersonal.html" class="btn btn-lg btn-primary btn-block">Usuario</a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <a href="/RegistroEmpresa.html" class="btn btn-lg btn-primary btn-block">Vendedor</a>
        </div>
    </div>
    <!--login-or centra el contenido del login-->
    <div class="login-or">
        <hr class="hr-or">
        <span class="span-or">Su</span>
    </div>
    <div class="login-or">
        <hr class="hr-or">
        <span class="span-or">Cuenta</span>
    </div>
    
    <div class="form-group center-block" id="midiv">
        <div class="group center-block">
            <input type="text" required id="txt-usuarioIP"/>
            <span class="highlight"></span>
            <!--label-->
            <span class="bar"></span>
            <!--botton del input-->
            <label class="label-login">Usuario o correo</label>
        </div>
    </div>
    <div class="form-group">
        <div class="group">
            <input type="password" required id="txt-contrasenaIP"/>
            <span class="highlight"></span>
            <!--label-->
            <span class="bar"></span>
            <!--botton del input-->
            <label class=label-login>Contraseña</label>
        </div>
    </div>
    <div class="form-group" id="div-check-recordame">
        <div class="checkbox" id="div-checkbox">
            Recordarme
            <label id="label-checkbox">
                <input type="checkbox" id="input-checkbox-loginc">
            </label>
        </div>
    </div>
    <div class="form-group">
        <h1 class="components">
        <button type="button" class=" btn btn-primary center-block" id="btn-ingresarIP"><img src="img/check-symbol.png" onmouseover="this.width=70;this.height=70;" onmouseout="this.width=64;this.height=64;" width="64" height="64">
        </button>
        </h1>
    </div>
    <div class="form-group">
        <h3 id="components"><a class="pull-center" href="#">¿Olvido su contraseña?</a></h3>
    </div>
</div>
</div>
</div>
<!--Termina la parte del contenido -->
<footer id="footer-Section">
<!--footer es la etiqueta que indica el pie de página-->
<div class="footer-top-layout">
<div class="container">
    <div class="row">
        <div class="mi-informacion">
            <h4>NUESTRA INFORMACIÓN</h4>
            <p>Estamos para servirle</p>
            <!--bloque del pie de pagina-->
            <div class="post-blog-date">--------------------</div>
        </div>
        <div class=" col-lg-8 col-lg-offset-2" id="midive">
            <div class="col-sm-4">
                <div class="footer-col-item">
                    <!--footer-col-item divide en un pequeño contenedor el pie de página-->
                    <h4>Dirección local</h4>
                    <address>
                        Barrio Maracana, San Carlos<br>
                        Quesado 200m sur regional,
                    </address>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="footer-col-item">
                    <h4>Teléfonos</h4>
                    <address>
                        50661250382<br>
                        24711733
                    </address>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="footer-col-item">
                    <h4>Correos</h4>
                    <address>
                        2011.peswainer.1996@gmail.com<br>
                        R&Bcompany@gmail.com
                    </address>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="footer-bottom-layout">
<div class="socialMedia-footer">
    <a href="https://youtube.com"><img src="img/youtube.png" onmouseover="this.width=150;this.height=150;" onmouseout="this.width=128;this.height=128;" width="128" height="128"></a>
    <a href="https://www.facebook.com/wainer.rodriguez"><img src="img/facebook.png" onmouseover="this.width=150;this.height=150;" onmouseout="this.width=128;this.height=128;" width="128" height="128"></a>
    <a href="https://www.twitter.com"><img src="img/twitter.png" onmouseover="this.width=150;this.height=150;" onmouseout="this.width=128;this.height=128;" width="128" height="128"></a>
    <a href="https://www.whatsapp.com"><img src="img/whatsapp.png" onmouseover="this.width=150;this.height=150;" onmouseout="this.width=128;this.height=128;" width="128" height="128"></a>
    <a href="https://www.pinteres.com"><img src="img/pinterest.png" onmouseover="this.width=150;this.height=150;" onmouseout="this.width=128;this.height=128;" width="128" height="128"></a>
</div>
<div class="copyright-tag">create by Wainer Rodríguez Bonilla.</div>
</div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/ingresar.js"></script>
</body>
</html>