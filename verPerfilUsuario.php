<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Perfil usuario</title>
        <meta name="viewport" content="widt=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/headerFooter.css">
        <link rel="stylesheet" type="text/css" href="css/verPerfilUsuario.css">
    </head>
    <body>
        <?php
        include "header.php";
        include "navbar.php";
        include "php/verUsuario.php";
        ?>
        <div class="container">
            <div class="row main">
                <div class="main-container">
                    <form role="form">
                        <div class="form-group">
                            <div class="text-center">
                                <img src="data:image/jpeg;base64,<?php echo base64_encode($foto);?>" class="img-circle" id="fotoUsuario" onmouseover="this.width=170;this.height=150; "onmouseout="this.width=64;this.height=64;" width="100" height="100" margin-top="10">
                            </div>
                            <h4 class="text-center" id="nombreUsuario"></h4>
                            <div class="alert alert-success class midiv">
                                <span class="label label-primary">Nombre -> <?php echo $nombre; ?></span>
                            </div>
                            <div class="alert alert-success class midiv">
                                <span class="label label-primary">Correo -> <?php echo $email ?></span>
                            </div>
                            <div class="alert alert-success class midiv">
                                <span class="label label-primary">Edad -> <?php echo $edad ?></span>
                            </div>
                            <div class="alert alert-success class midiv">
                                <span class="label label-primary" type ="password">Usuario -> <?php echo $usuario ?>
                                </span>
                            </div>
                        </div>
                        <div class="alert alert-success class midiv">
                            <span id="spanPass" class="label label-primary" onmouseover="ver('<?php echo $pass ?>')" onmouseout = "noVer()"> Pasa el mause para ver</span>
                        </div>
                        <div id="mapMain">
                            <div class="form-group" id="map"></div>
                            <script>
                            var ltt =  parseFloat('<?php echo $latitud; ?>');
                            var lgg =  parseFloat('<?php echo $longitud; ?>');
                            function initMap() {
                            var myLatLng = {lat: ltt, lng: lgg };
                            var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 14,
                            center: myLatLng
                            });
                            var marker = new google.maps.Marker({
                            position: myLatLng,
                            map: map,
                            title: 'Ubicación'
                            });
                            }
                            </script>
                            <script async defer
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQFJdLinZ94oC6GJD3s_IuxhBJuPRgtjM&callback=initMap">
                            </script>
                            </script>
                            <h1 class="components">
                            <a href="registroUsuario.php">
                                <button type="button" class=" btn btn-primary center-block" id="btnEditar"><img src="img/edit.png" onmouseover="this.width=70;this.height=70;" onmouseout="this.width=64;this.height=64;" width="64" height="64">
                                </button>
                            </a>
                            </h1>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include "footer.php" ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/verPerfilUsuario.js"></script>
    </body>
</html>