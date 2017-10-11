<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Nuevo producto</title>
        <meta name="viewport" content="widt=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/headerFooter.css">
        <link rel="stylesheet" type="text/css" href="css/registroProducto.css">
    </head>
    <body>
        <?php
         $siteName = "registroProducto.php";
         include "header.php" 
        ?>
        <?php include "navbar.php" ?>
        <div class="container" id="sub-conteint">
            <div class="row main">
                <div  id="conte">
                    <h3 class="main-title">NUEVO PRODUCTO</h3>
                    <form role="form" action="php/registroProducto.php" name="registroProducto"  id="prospects_form" method="post" enctype="multipart/form-data">
                        <div class="form-group center-block" id="midiv">
                            <div class="form-group">
                                <div class="group">
                                    <input type="text" id="txtCode" name="txtCode" REQUIRED />
                                    <span class="highlight"></span>
                                    <!--label-->
                                    <span class="bar"></span>
                                    <!--botton del input-->
                                    <label id="lblC" class="label">Codigo</label>
                                </div>
                            </div>
                            <div class="group center-block">
                                <input type="text" id="txtName" name="txtName" REQUIRED>
                                <span class="highlight"></span>
                                <!--label-->
                                <span class="bar"></span>
                                <!--botton del input-->
                                <label id="lblName" class="label">Nombre del producto</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="group">
                                <input type="text" id="txtBrand" name="txtBrand" REQUIRED />
                                <span class="highlight"></span>
                                <!--label-->
                                <span class="bar"></span>
                                <!--botton del input-->
                                <label  id="lblBrand" class="label">Marca</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="group">
                                <input type="number" id="txtPrice" name="txtPrice" REQUIRED/>
                                <span class="highlight"></span>
                                <!--label-->
                                <span class="bar"></span>
                                <!--botton del input-->
                                <label id="lblPrice" class="label">Precio</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="group">
                                <input type="number" id="txtQuantity" name="txtQuantity" REQUIRED/>
                                <span class="highlight"></span>
                                <!--label-->
                                <span class="bar"></span>
                                <!--botton del input-->
                                <label id="lblQuantity" class="label">Cantidad</label>
                            </div>
                        </div>
                        <input type="text" id="txtId" name="txtId" value="<? echo  htmlentities($id); ?>"/>
                        <input type="text" id="txtTipo" name="txtTipo" value="<? echo htmlentities($tipoU); ?>"/>
                        <input type="text" id="pageName" name="pageName" value="<? echo htmlentities($siteName); ?>"/>
                        <div class="form-group" id="select-category-form">
                            <span id="select-cb"><span id="labelCategoria">Categoría</span></span>
                            <span class="select-group-button">
                                <select  id="categoria" name="cbCategory" class="form-control selectCtFrom" type="select">
                                    <option value="Todas">Todas</option>
                                    <option value="Hombre">Hombre</option>
                                    <option value="Mujeres">Mujeres</option>
                                    <option value="Niños">Niños</option>
                                    <option value="Casa">Casa</option>
                                    <option value="Jardin">Jardin</option>
                                    <option value="Motores">Motores</option>
                                    <option value="Honits">Honits</option>
                                    <option value="Consolas">Consolas</option>
                                    <option value="Otros">Otros</option>
                                </select>
                            </span>
                        </div>
                        <div class="form-group" id="select-category-form">
                            <span id="select-cb"><span id="labelSubCategora">Sub-categoría</span></span>
                            <span class="select-group-button">
                                <!--radius id-->
                                <select  id="subCategoria" name="cbSubCategory" class="form-control selectCtFrom" type="select">
                                    <option id="option-select" value="Rapa para niños">Articulos solo para niños</option>
                                    <option id="option-select" value="Calzodo">Articulos solo para jovenes</option>
                                    <option id="option-select" value="juegos play4">Articulo solo para adultos</option>
                                    <option id="option-select" value="juegos play4">Articulo solo para adultos mayores</option>
                                    <option id="option-select" value="juegos play4">Disponibles para todos</option>
                                    <option id="option-select" value="juegos play4">Articulo solo menores de 15</option>
                                    <option id="option-select" value="juegos play4">Articulo solo mayores de 16 a 30</option>
                                    <option id="option-select" value="juegos play4">Articulo solo para mayores de 30 en adelante</option>
                                </select>
                            </span>
                        </div>
                        <div class="form-group">
                            <div class="group">
                                <Input id="txtDescription" name= "txtDescription" type="text"  class="textarea" REQUIRED/>
                                <span class="highlight"></span>
                                <!--label-->
                                <span class="bar"></span>
                                <!--botton del input-->
                                <label id="lblDescription" class="label">Descripción</label>
                            </div>
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
                        <div class="form-group block-center" >
                            <div class="form-group">
                                <h1 class="components">
                                <button id="btnIngresar" type="submit" class=" btn btn-primary center-block"><img src="img/check-symbol.png" onmouseover="this.width=70;this.height=70;" onmouseout="this.width=64;this.height=64;" width="64" height="64">
                                </button>
                                </h1>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php include "footer.php";?>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/registroProducto.js"></script>
    </body>
</html>