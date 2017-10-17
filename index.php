<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Página principal</title>
        <meta charset="utf-8">
        <meta name="viewport" content="widt=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/headerFooter.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.css" rel="stylesheet">
    </head>
    <body>
        <div id="top">
            <div class="container">
                <div class="col-md-6 offer" data-animate="fadeInDown">
                    <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Oferta del día</a> <a href="#">Aprovecha el 35% de rebaja en ropa de niño</a>
                </div>
                <div class="col-md-6" data-animate="fadeInDown">
                    <ul class="menu">
                        <li><a href="Nosotros.html">Nosotros</a>
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
    <form class="navbar-form navbar-left" role="search" height="10px">
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
                    <button id="btnNavBuscar" type="button" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true" id="span-buscar"></span></button>
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
                                    <img id="profile-img" class="center-block" src="img/img-profile.jpg"/>
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
                                <a href="RegistroUsuario.html" class="btn btn-primary">Usuario</a>
                                <a href="RegistroVendedor.html" class="btn btn-primary">Empresa</a>
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
                                    <div id="btnOlvidoContrasena" class="help-block text-center"><a href="#">Olvido su contraseña?</a></div>
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
<div id="all">
<!--div de slider principal-->
<div id="content">
<div class="container">
    <div class="col-md-12">
        <div id="main-slider">
            <div class="item">
                <img src="img/img6-slider-main.jpg" alt="" class="img-responsive">
            </div>
            <div class="item">
                <img class="img-responsive" src="img/img2-slider-main.jpg" alt="" class="img-responsive">
            </div>
            <div class="item">
                <img class="img-responsive" src="img/img3-slider-main.jpg" alt="">
            </div>
            <div class="item">
                <img class="img-responsive" src="img/img4-slider-main.jpg" alt="">
            </div>
        </div>
        <!--Termina el div del slider principal-->
    </div>
</div>
<!--Preferencias acceso directo-->
<div id="advantages">
    <div class="container">
        <div class="same-height-row">
            <div class="col-sm-4">
                <div class="box same-height clickable">
                    <div class="icon"><i class="fa fa-heart"></i>
                    </div>
                    <h3><a href="#">Mejores accesorios para el hogar</a></h3>
                    <p>Decora tu hogar con los mejores articulos del mercado, dantole click al titulo</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box same-height clickable">
                    <div class="icon"><i class="fa fa-tags"></i>
                    </div>
                    <h3><a href="#">Hobbis</a></h3>
                    <p>Todos tu sueños, los puedes cumplir, dandole click al titulo</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box same-height clickable">
                    <div class="icon"><i class="fa fa-thumbs-up"></i>
                    </div>
                    <h3><a href="#">Mejores articulos de técnologia</a></h3>
                    <p>Accesa más rápido a los mejores articulos técnologicos del mes</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Finaliza el div de las priferencias principales-->
<!-- hot en tendenica teléfonicas -->
<div id="hot">
    <div class="box">
        <div class="container">
            <div class="col-md-12">
                <h2>Tendencias en técnologia</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="product-slider">
            <!--Primer producto-->
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/tecnologia-producto1.png" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/tecnologia-producto1.png" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/tecnologia-producto1.png" alt="" class="img-responsive">
                    </a>
                    <!--Información del producto-->
                    <div class="text">
                        <h3><a href="detail.html">Fundas para Iphone</a></h3>
                        <p class="price">₡-5,000.00</p>
                    </div>
                    <!--/Termina la información del procuto-->
                </div>
                <!--Finaliza el primer producto-->
            </div>
            <!--Segundo producto-->
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/tecnologia-producto2.png" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/tecnologia-producto2.png" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/tecnologia-producto2.png" alt="" class="img-responsive">
                    </a>
                    <!--Infomación del proucto-->
                    <div class="text">
                        <h3><a href="detail.html">Protectores de pantalla</a></h3>
                        <p class="price"><del>₡ 4,500.00</del> ₡3,000.00</p>
                    </div>
                    <!-- /Terminala infomración del proucto -->
                    <!--Etiqueta de rebajo-->
                    <div class="ribbon sale">
                        <div class="theribbon">Rebajo</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /Termina la etiqueda de rebajo -->
                    <!--Etique de nuevo-->
                    <div class="ribbon new">
                        <div class="theribbon">Nuevo</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /Termina la etiqueta nuevo -->
                    <!--Etiqueta de rebajo en porciento-->
                    <div class="ribbon gift">
                        <div class="theribbon">-25%</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- Terminala etiqueta de rebajo en porciento -->
                </div>
            </div>
            <!--Termina el div del segundo producto de slider 1-->
            <!--Inica el div del tercer producto de slider 1-->
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/tecnologia-producto3.png" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/tecnologia-producto3.png" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/tecnologia-producto3.png" alt="" class="img-responsive">
                    </a>
                    <!--Div de la información del pructo-->
                    <div class="text">
                        <h3><a href="detail.html">Parlantes Inalanbricos</a></h3>
                        <p class="price">₡10,000.00</p>
                    </div>
                    <!-- /Termina el div de la infación del pricducto -->
                </div>
            </div>
            <!--Termina el div del tercer producto del slider 1-->
            <!--Inica el div del cuarto producto del slider 1-->
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/tecnologia-producto4.png" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/tecnologia-producto4.png" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/tecnologia-producto4.png" alt="" class="img-responsive">
                    </a>
                    <!--Div del la infomación del producto-->
                    <div class="text">
                        <h3><a href="detail.html">Iphone 6</a></h3>
                        <p class="price">₡310,000.00</p>
                    </div>
                    <!-- /Finaliza la infomación del producto -->
                </div>
            </div>
            <!--Finaliza el div del cuarto pruducto-->
            <!--Inical divl del quinto producto-->
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/tecnologia-producto5.png" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/tecnologia-producto5.png" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/tecnologia-producto5.png" alt="" class="img-responsive">
                    </a>
                    <!--Div de la infomación del producto-->
                    <div class="text">
                        <h3><a href="detail.html">Smarth Whatch</a></h3>
                        <p class="price">₡13,500.00</p>
                    </div>
                    <!-- /finaliza el div de la información -->
                    <!--div de la etiqueta del nuevo -->
                    <div class="ribbon new">
                        <div class="theribbon">Nuevo</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- Finalia la el div de la etiqueta de nuevo -->
                </div>
            </div>
            <!--Finaliza el div del quinto producto-->
            <!--Inicia el div del sexto producto-->
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/tecnologia-producto6.png" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/tecnologia-producto6.png" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/tecnologia-producto6.png" alt="" class="img-responsive">
                    </a>
                    <!--div de la información del producto-->
                    <div class="text">
                        <h3><a href="detail.html">Mac Air</a></h3>
                        <p class="price">₡800,000.00</p>
                    </div>
                    <!-- /finaliza el div de la información de producto-->
                    <!--Div de la etiqueta de rebajo en porciento-->
                    <div class="ribbon gift">
                        <div class="theribbon">-5%</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!--Finaliza el div de la etiqueta de rebajo-->
                </div>
            </div>
            <!-- /Termina el div del sexto producto -->
            <!--Inicia el div del septimo proucto -->
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/tecnologia-producto7.png" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/tecnologia-producto7.png" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/tecnologia-producto7.png" alt="" class="img-responsive">
                    </a>
                    <!--div contine la información del producto-->
                    <div class="text">
                        <h3><a href="detail.html">Mac Bock pro</a></h3>
                        <p class="price"><del>₡720,000.00</del> ₡700,000.00</p>
                    </div>
                    <!-- /Finaliza el div que contiene la infomación del producto -->
                    <!--Div contiene la etiqueta de rebajo del producto-->
                    <div class="ribbon sale">
                        <div class="theribbon">Rebajo</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /Termina la etiqueta que contiene el rebajo del producto -->
                    <!--Inicia la etiqueta que indica el nuevo pructo-->
                    <div class="ribbon new">
                        <div class="theribbon">Nuevo</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /Temina la etiqueta que indica el nuevo pruducto -->
                    <!--Inical el div que contiene el rebajo en porciento del producto-->
                    <div class="ribbon gift">
                        <div class="theribbon">-5%</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /Termina el div que contien el rebajo del pruducto -->
                </div>
            </div>
            <!--/Termina el div que contiene el septimo producto-->
            <!--Inicia el div del octavo pruducto-->
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/tecnologia-producto9.png" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/tecnologia-producto9.png" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/tecnologia-producto9.png" alt="" class="img-responsive">
                    </a>
                    <!--div contien la infomación del prudcto-->
                    <div class="text">
                        <h3><a href="detail.html">Célulares Antroid Cat's</a></h3>
                        <p class="price">₡250,000.00</p>
                    </div>
                    <!-- /Termina el div que contiene la información del prudcto -->
                </div>
            </div>
            <!--/Termina el div que contiene el octavo pructo-->
        </div>
    </div>
    <!-- /Termina el product-slider -->
</div>
<!-- /Termina el container -->
<div id="hot">
    <div class="box">
        <div class="container">
            <div class="col-md-12">
                <h2>Tendencias de moda</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="product-slider">
            <!--Div contiene el producto 1 del slider2-->
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/moda-producto2.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/moda-producto2.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/moda-producto2.jpg" alt="" class="img-responsive">
                    </a>
                    <!--Div contiene el la información del prucducto-->
                    <div class="text">
                        <h3><a href="detail.html">Jacket</a></h3>
                        <p class="price">₡15,000.00</p>
                    </div>
                    <!-- /Termina el div que contien la infación del producto -->
                </div>
            </div>
            <!-- /Termina el div que contiene la infomación  del producto 1-->
            <!--Div contine la infomación del producto 2 en slider 2-->
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/moda-producto3.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/moda-producto3.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/moda-producto3.jpg" alt="" class="img-responsive">
                    </a>
                    <!--Div contine la infomación del producto-->
                    <div class="text">
                        <h3><a href="detail.html">Bolso DC</a></h3>
                        <p class="price"><del>₡22,000.00</del> ₡19,000.00</p>
                    </div>
                    <!-- /Termina el div que contine la infomación del pruducto -->
                    <!--Div contine la etiqueta de rebajo del producto-->
                    <div class="ribbon sale">
                        <div class="theribbon">Rebaja</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /Termina el div que  contiene la etiqueta de rebajo -->
                    <!--Div contiene la etiqueta de pruducto nuevo-->
                    <div class="ribbon new">
                        <div class="theribbon">Nuevo</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /Termina el div de la etiqueta de producto nuevo -->
                    <!--Inicia el div que contine la etiqueta de rebajo en porciento-->
                    <div class="ribbon gift">
                        <div class="theribbon">-5%</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /Termina la etiqueta de rebajo en porciento -->
                </div>
            </div>
            <!-- /Termina el div del prudcto2 slider 2 -->
            <!--Inicia el div del producto 3 slider 3-->
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/moda-producto4.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/moda-producto4.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/moda-producto4.jpg" alt="" class="img-responsive">
                    </a>
                    <!--div de la información del pruducto-->
                    <div class="text">
                        <h3><a href="detail.html">Vestido</a></h3>
                        <p class="price">₡80,000.00</p>
                    </div>
                    <!-- /Termina el div de la infomación -->
                </div>
            </div>
            <!-- /Termina el div del prudcto 3 -->
            <!--Inica el div de pructo 4 slider 2-->
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/moda-producto5.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/moda-producto5.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/moda-producto5.jpg" alt="" class="img-responsive">
                    </a>
                    <!--div contiene la información del producto -->
                    <div class="text">
                        <h3><a href="detail.html">Camisa para mujer</a></h3>
                        <p class="price">₡5,000.00</p>
                    </div>
                    <!-- /termina el div que contienla infomación de prudcto  -->
                </div>
            </div>
            <!-- /Termina el div del pructo4 -->
            <!--Div contiene el procuto 5-->
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/moda-producto6.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/moda-producto6.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/moda-producto6.jpg" alt="" class="img-responsive">
                    </a>
                    <!--Div contiena la infomación del pructo 5-->
                    <div class="text">
                        <h3><a href="detail.html">Jacket de cuero</a></h3>
                        <p class="price">₡25,000.00</p>
                    </div>
                    <!-- /Termina el div que cotiene la información del producto 5 -->
                    <!--div contine la etiqueta del nuevo producto-->
                    <div class="ribbon new">
                        <div class="theribbon">Nueva</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /Termina el div de la etiqueta nuevo -->
                </div>
            </div>
            <!-- /Termina el div del producto 5 -->
            <!--Div contiene el producto 6-->
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/moda-producto9.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/moda-producto9.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/moda-producto9.jpg" alt="" class="img-responsive">
                    </a>
                    <!--Div contiene la infamción del prodcto-->
                    <div class="text">
                        <h3><a href="detail.html">Bestido una pieza</a></h3>
                        <p class="price">₡15,550.00</p>
                    </div>
                    <!-- /Termina el div que contiene la infomación del producto -->
                    <!--Div contine la etiqueta de rebaja en porciento -->
                    <div class="ribbon gift">
                        <div class="theribbon">-4%</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /Terminael div que contiene la etiqueta de rebajo en porciento -->
                </div>
            </div>
            <!-- /Termina el div del pruducto 6 -->
            <!-- Inica el div del producto 7  -->
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/moda-producto7.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/moda-producto7.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/moda-producto7.jpg" alt="" class="img-responsive">
                    </a>
                    <!--div contine  la infomación del producto-->
                    <div class="text">
                        <h3><a href="detail.html">Vestidos clasicos</a></h3>
                        <p class="price"><del>$280</del> ₡35,000.00</p>
                    </div>
                    <!-- /Finaliza el div que contine la infomación del producto -->
                    <!--Inica el div que contine la etiqeta de rebaja-->
                    <div class="ribbon sale">
                        <div class="theribbon">Rebaja</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /Termina el div que contiene la etiqueta de rebaja -->
                    <!--Inica el div que contine la etiqueta de nuevo-->
                    <div class="ribbon new">
                        <div class="theribbon">Nuevo</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!--/ Termina el div que contine la etiqueta de nuevo -->
                    <!--Inicia el div que contien la etiqueta de nuevo en porciento-->
                    <div class="ribbon gift">
                        <div class="theribbon">-5%</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /Termina el div que contine la infomación de rebaja en porciento -->
                </div>
            </div>
            <!-- /Termina el div del 7° producto -->
            <!--Inicia el div del 8° producto -->
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/moda-producto8.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/moda-producto8.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/moda-producto8.jpg" alt="" class="img-responsive">
                    </a>
                    <!--Inia el div de la infomración del pruducto-->
                    <div class="text">
                        <h3><a href="detail.html">trajes de baño</a></h3>
                        <p class="price">₡60,000.00</p>
                    </div>
                    <!-- /Termina el div que contine la infomación del producto -->
                </div>
            </div>
            <!-- /Termina el fiv de 8° producto -->
        </div>
    </div>
    <!-- /.product-slider -->
</div>
<div id="hot">
    <div class="box">
        <div class="container">
            <div class="col-md-12">
                <h2>Tendencias de accesoris para el hogar</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="product-slider">
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/casa-producto9.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/casa-producto9.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/casa-producto9.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="detail.html">Asientos de madera</a></h3>
                        <p class="price">₡12,550.00</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/casa-producto2.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/casa-producto2.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/casa-producto2.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="detail.html">Sillas de espera</a></h3>
                        <p class="price"><del>₡25,000.00</del> ₡20,550.00</p>
                    </div>
                    <!-- /.text -->
                    <div class="ribbon sale">
                        <div class="theribbon">Rebaja</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /.ribbon -->
                    <div class="ribbon new">
                        <div class="theribbon">Nuevo</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /.ribbon -->
                    <div class="ribbon gift">
                        <div class="theribbon">-6.5%</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /.ribbon -->
                </div>
                <!-- /.product -->
            </div>
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/casa-producto3.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/casa-producto3.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/casa-producto3.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="detail.html">Sillas para desayunador</a></h3>
                        <p class="price">₡8,000.00</p>
                    </div>
                    <!-- /.text -->
                </div>
                <!-- /.product -->
            </div>
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/casa-producto4.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/casa-producto4.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/casa-producto4.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="detail.html">Molde para pasteles</a></h3>
                        <p class="price">₡2,500.00</p>
                    </div>
                    <!-- /.text -->
                </div>
                <!-- /.product -->
            </div>
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/casa-producto5.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/casa-producto5.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/casa-producto5.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="detail.html">Cuadro para pared</a></h3>
                        <p class="price">₡35,000.000</p>
                    </div>
                    <!-- /.text -->
                    <div class="ribbon new">
                        <div class="theribbon">Nuevo</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /.ribbon -->
                </div>
                <!-- /.product -->
            </div>
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/casa-producto6.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/casa-producto6.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/casa-producto6.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="detail.html">Flores</a></h3>
                        <p class="price">₡6,722.00</p>
                    </div>
                    <!-- /.text -->
                    <div class="ribbon gift">
                        <div class="theribbon">-5%</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /.ribbon -->
                </div>
                <!-- /.product -->
            </div>
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/casa-producto7.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/casa-producto7.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/casa-producto7.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="detail.html">Floreros</a></h3>
                        <p class="price"><del>₡6,000.00</del> ₡5,350.00</p>
                    </div>
                    <!-- /.text -->
                    <div class="ribbon sale">
                        <div class="theribbon">Rebaja</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /.ribbon -->
                    <div class="ribbon new">
                        <div class="theribbon">Nuevo</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /.ribbon -->
                    <div class="ribbon gift">
                        <div class="theribbon">-2.5%</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /.ribbon -->
                </div>
                <!-- /.product -->
            </div>
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/casa-producto8.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/casa-producto8.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/casa-producto8.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="detail.html">Sillas</a></h3>
                        <p class="price">₡12,000.00</p>
                    </div>
                    <!-- /.text -->
                </div>
                <!-- /.product -->
            </div>
        </div>
        <!-- /.product-slider -->
    </div>
    <!-- /.container -->
</div>
<div id="hot">
    <div class="box">
        <div class="container">
            <div class="col-md-12">
                <h2>hobbies tendencias</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="product-slider">
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/hobbit-producto1.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/hobbit-producto1.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/hobbit-producto1.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="detail.html">Patinetas</a></h3>
                        <p class="price">₡90,550.00</p>
                    </div>
                    <!-- /.text -->
                </div>
                <!-- /.product -->
            </div>
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/hobbit-producto2.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/hobbit-producto2.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/hobbit-producto2.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="detail.html">Patines de linea</a></h3>
                        <p class="price"><del>₡150,000.00</del> ₡125,550.00</p>
                    </div>
                    <!-- /.text -->
                    <div class="ribbon sale">
                        <div class="theribbon">Rebaja</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /.ribbon -->
                    <div class="ribbon new">
                        <div class="theribbon">Nuevo</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /.ribbon -->
                    <div class="ribbon gift">
                        <div class="theribbon">-6.5%</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /.ribbon -->
                </div>
                <!-- /.product -->
            </div>
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/hobbit-producto3.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/hobbit-producto3.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/hobbit-producto3.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="detail.html">Patin</a></h3>
                        <p class="price">₡67,000.00</p>
                    </div>
                    <!-- /.text -->
                </div>
                <!-- /.product -->
            </div>
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/hobbit-producto4.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/hobbit-producto4.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/hobbit-producto4.jpg" "img/casa-producto4.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="detail.html">Tennis</a></h3>
                        <p class="price">₡150,000.00</p>
                    </div>
                    <!-- /.text -->
                </div>
                <!-- /.product -->
            </div>
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/hobbit-producto5.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/hobbit-producto5.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/hobbit-producto5.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="detail.html">Escultura de arte "KOKO"</a></h3>
                        <p class="price">₡450,000.00</p>
                    </div>
                    <!-- /.text -->
                    <div class="ribbon new">
                        <div class="theribbon">Nuevo</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /.ribbon -->
                </div>
                <!-- /.product -->
            </div>
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/hobbit-producto6.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/hobbit-producto6.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/hobbit-producto6.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="detail.html">Sky guantes</a></h3>
                        <p class="price">₡8,722.00</p>
                    </div>
                    <!-- /.text -->
                    <div class="ribbon gift">
                        <div class="theribbon">-5%</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /.ribbon -->
                </div>
                <!-- /.product -->
            </div>
            <!-- /.col-md-4 -->
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/hobbit-producto7.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/hobbit-producto7.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/hobbit-producto7.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="detail.html">Maquina de spining</a></h3>
                        <p class="price"><del>₡78,556.00</del> ₡70,350.00</p>
                    </div>
                    <!-- /.text -->
                    <div class="ribbon sale">
                        <div class="theribbon">Rebaja</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /.ribbon -->
                    <div class="ribbon new">
                        <div class="theribbon">Nuevo</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /.ribbon -->
                    <div class="ribbon gift">
                        <div class="theribbon">-2.5%</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /.ribbon -->
                </div>
                <!-- /.product -->
            </div>
            <div class="item">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="detail.html">
                                    <img src="img/hobbit-producto8.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="detail.html">
                                    <img src="img/hobbit-producto8.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="detail.html" class="invisible">
                        <img src="img/hobbit-producto8.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="detail.html">Play 4</a></h3>
                        <p class="price">₡185,000.00</p>
                    </div>
                    <!-- /.text -->
                </div>
                <!-- /.product -->
            </div>
        </div>
        <!-- /.product-slider -->
    </div>
    <!-- /.container -->
</div>
<!-- Temina los sliders -->
<!--Div del segundo slider -->
<div class="container" data-animate="fadeInUpBig">
    <div class="col-md-12">
        <div class="box slideshow">
            <h3>Mejores productos</h3>
            <p class="lead">Obtén los mejores productos completamente originales</p>
            <div id="get-inspired" class="owl-carousel owl-theme">
                <div class="item">
                    <a href="#">
                        <img src="img/getinspired1.jpg" alt="Get inspired" class="img-responsive">
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="img/getinspired2.jpg" alt="Get inspired" class="img-responsive">
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="img/getinspired3.jpg" alt="Get inspired" class="img-responsive">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Termina el div del segundo slider -->
<!-- Div contine infomación adicional -->
<div class="box text-center" data-animate="fadeInUp">
    <div class="container">
        <div class="col-md-12">
            <h3 class="text-uppercase">From our blog</h3>
            <p class="lead">What's new in the world of fashion? <a href="blog.html">Check our blog!</a>
        </p>
    </div>
</div>
</div>
<div class="container">
<div class="col-md-12" data-animate="fadeInUp">
    <div id="blog-homepage" class="row">
        <div class="col-sm-6">
            <div class="post">
                <h4><a href="post.html">Infomación adicional</a></h4>
                <p class="author-category"><a href="#">R&B Company</a>
            </p>
            <hr>
            <p class="intro">Con todos los servicos brindados tratamos de satisfacer las necesidad de nuestros clientes y consumidores</p>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="post">
            <h4><a href="post.html">Atiende tus consultas</a></h4>
            <p class="author-category"><a href="#">R&B company</a>
        </p>
        <hr>
        <p class="intro">Puedes realizar culquier consulta o quejas cuando deseas, en la parte de abajo de la página esta nuestra información</p>
    </div>
</div>
</div>
<!-- Termina el div de la infomación adicional-->
</div>
</div>
<!-- /termina el div container -->
<!-- Termina el div de la infomación adicional  -->
</div>
</div>
<!-- Termina el div all que contine los slider y productos -->
<!--Termina la parte del contenido -->
<!--Inicia la parte del pie de página-->
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
<a href="https://youtube.com"><img src="img/youtube.png" onmouseover="this.width=150;this.height=150;" onmouseout="this.width=128;this.height=128;" width="128" height="128" id="ejemplo"></a>
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
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/front.js"></script>
<script type="text/javascript" src="js/Index.js"></script>
</body>
</html>