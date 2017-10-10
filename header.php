<?php
$id     = 0;
$foto   = "";
$email  = "email@gmail.com";
$nombre = "nombre apellido uno apellido dos";
if ($_GET) {
	$id   = $_GET["id"];
	$tipo = $_GET["tipo"];
	$sql1 = "";
	if ($tipo === "u") {
		$sql1 = "select * from usuario where id_usuario = '$id'";
	} else {
		$sql1 = "select * from tienda where id_tienda = '$id'";
	}
	include "php/conexion.php";
	$query = $con->query($sql1);
	while ($r = $query->fetch_array()) {
		if ($tipo === "u") {
			$id     = $r["id_usuario"];
			$nombre = $r["nombre"]." ".$r["apellidoUno"]." ".$r["apellidoDos"];
		} else {
			$id     = $r["id_tienda"];
			$nombre = $r["nombre"];
		}
		$email = $r["email"];
		$foto  = $r["foto"];
	}
	$con->close();
}
?>
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
<form class="navbar-form navbar-left" role="search" height="10px" action="php/header.php" name="insert"   method="post" enctype="multipart/form-data">
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
            <button id="btnNavBuscar" type="submit" class="btn btn-default" name="someAction" ><span class="glyphicon glyphicon-search" aria-hidden="true" id="span-buscar"></span></button>
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
<?php
if ($id > 0) {
	?>
	                            <img id="profile-img" class="center-block" src="data:image/jpeg;base64,<?php echo base64_encode($foto);?>" />
	<?php
} else {
	?>
	<img id="profile-img" class="center-block" src="img/user.png" />
	<?php
}
?>
                        </p>
                    </div>
                    <div class="col-lg-8">
                        <p class="text-center"><strong id="headerName" name="aa"><?php echo $nombre;?></strong></p>
                        <p class="text-center small" id="headerEmail"><?php echo $email;?></p>
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
                        <a href="#" class="btn btn-primary">Usuario</a>
                        <a href="registroEmpresa.php?id=<?php echo $id?>" class="btn btn-primary">Empresa</a>
                    </div>
                    <h2 id="h2">Ingreso rápido</h2>
                    <form class="form" role="form"  accept-charset="UTF-8" id="login-nav" action="php/header.php"  name="insert" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail2">Usuario</label>
                            <input type="text" class="form-control" id="txt-usuario" placeholder="Usuario" REQUIRED name="txtUser">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputPassword2">Contraseña</label>
                            <input type="password" class="form-control" id="txt-contrasena" placeholder="Contraseña" REQUIRED name="txtPass">
                            <div id="btnOlvidoContrasena" class="help-block text-center"><a href="">Olvido su contraseña?</a></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="btn-ingresar-navbar" class="btn btn-primary btn-block" name="btnLogin">Ingresar</button>
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