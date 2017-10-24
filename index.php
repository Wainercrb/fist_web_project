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
        <?php
        include "header.php";
        include "php/registroUsuario.php";
        include "navbar.php";
        ?>
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
        </div>
    </div>
</div>
</div>
<?php include "footer.php" ?>
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