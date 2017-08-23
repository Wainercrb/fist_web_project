var platitud = "";
var plongitud = "";
var editar = false;
var Usuarios = [];
var usuarioActual = {
 nombre: "",
 tipoUsuario: "",
 usuario: ""
};
/*Eventos de clicks en los botones*/
window.addEventListener('load', cargarComponentesUsu, false);
document.querySelector('#btnIngresar').addEventListener('click', capturar);
document.querySelector('#btn-ingresar-navbar').addEventListener('click', Ingresar);
document.querySelector('#blah').addEventListener('click', inputProfilePicture);
document.querySelector('#btnIngresarPerfil').addEventListener('click', verPerfiles);
document.querySelector('#btnCerrarCesion').addEventListener('click', cerrarSesion);
document.querySelector('#btnNavBuscar').addEventListener('click', buscar);
document.querySelector('#btnOlvidoContrasena').addEventListener('click', olvidoContrasena);
document.querySelector('#btnEliminarClienta').addEventListener('click', eliminarCuenta);


/*Evento de click para la etiqueta img del registro usuario*/
function inputProfilePicture() {
    var obj = document.getElementById("imgInp");
    if (obj) {
        obj.click();
    }
}
/*Captura los datos de las etiquedas del index*/
function capturar() {
    Usuarios = [];
    var e = document.getElementById("radiusFrom");
    var value = e.options[e.selectedIndex].value;
    var text = e.options[e.selectedIndex].text;
    /*Obtine la foto de la etiqueta img blah*/
    bannerImage = document.getElementById('blah');
    var imgData = getBase64Image(bannerImage);
    var tipoUsuario = "vendedor",
    nombre = document.querySelector('#txtNombre').value,
    email = document.querySelector('#txtEmail').value,
    usuario = document.querySelector('#txtUsuario').value,
    contrasenna1 = document.querySelector('#txtContrasenna1').value,
    contrasenna2 = document.querySelector('#txtContrasenna2').value,
    tipoServicio = text,
    latitud = platitud,
    longitud = plongitud,
    fotoPerfil = imgData;
    if (validarUsuario(nombre, email, usuario, contrasenna1, contrasenna2) == true) {
        editarNuevoVendedor();
        addUsuarios(tipoUsuario, nombre, email, usuario, contrasenna1, tipoServicio, longitud, latitud, fotoPerfil);
    }
}
/*Funcion elimina el vendedor en la posición guardada en el session Storange*/
function editarNuevoVendedor() {
    if (editar == true) {
        var lcStorange = JSON.parse(localStorage.getItem('vendedores'));
        lcStorange.splice(parseInt(sessionStorage.getItem("posicion")), 1);
        localStorage.setItem('vendedores', JSON.stringify(lcStorange));
    }
}
/*Crea el objeto con los parametos para añdiarlos a la lista pot el push*/
function addUsuarios(pTipoUsuario, pNombre, pEmil, pUsuario, pContrasenna, pTipoServicio, pLong, pLati, pFoto) {
    var nuevoUsuario = {
        tipoUsuario: pTipoUsuario,
        nombre: pNombre,
        email: pEmil,
        usuario: pUsuario,
        contrasenna: pContrasenna,
        tipoServicio: pTipoServicio,
        latitud: pLati,
        longitud: pLong,
        fotoU: pFoto
    };
    var temUsuarios = JSON.parse(localStorage.getItem('vendedores'));
    if (editar == true) {
        for (i = 0; i < temUsuarios.length; i++) {
            Usuarios.push(temUsuarios[i]);
        }
        Usuarios.push(nuevoUsuario);
        guardarLista(Usuarios);
    } else {
        Usuarios.push(nuevoUsuario);
        guardarLista(Usuarios);
    }
}
/*Guarda la el objeto que recibe por para metro al local storange*/
function guardarLista(NuevoUsuario) {
    localStorage.setItem('vendedores', JSON.stringify(NuevoUsuario));
    sessionStorage.removeItem('latitud');
    sessionStorage.removeItem('longitud');
    sessionStorage.removeItem('posicion');
    window.location = "RegistroVendedor.html";
}
/*Obtiene el arreglo del local storange, lo parsea y lo agrega a la lista*/
function cargarUsuarios() {
    Usuarios = [];
    var listaUsuarios = localStorage.getItem('vendedores');

    if (listaUsuarios != null) {
        Usuarios = JSON.parse(listaUsuarios);
    } else {
        Usuarios = [];
    }
    return Usuarios;
}
/*Verifica que no hay un usuario con los mismos datos*/
/*retorna true si no hay coincidencias*/
function verfificarLogin(pusuario) {
    cargarUsuarios();
    if (Usuarios != null || Usuarios != "") {
        for (i = 0; i < Usuarios.length; i++) {
            if (Usuarios[i].usuario == pusuario) {
                return false;
            }
        }
    }
    return true;
}

/*Validacion de los datos de la interfaz*/
function validarUsuario(nombre, valor, usu, p1, p2) {
    var espacios = false;
    var cont = 0;
    if (nombre.length <= 3) {
        VerError("labelNombre", "Nombre (verifique este dato)");
        return false;
    } else {
        VerError2("labelNombre", "Nombre");
    }
    if (!/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(valor)) {
        VerError("labelTxtEmal", "Email (Verifique la dirección de email)");
        return false;

    } else {
        VerError2("labelTxtEmal", "Email");
    }
    if (editar == false) {
        if (usu.length <= 3 || verfificarLogin(usu) == false) {
            VerError("labelTxtUsuario", "Usuario (verifique este dato)");
            return false;
        } else {
            VerError2("labelTxtUsuario", "Usuario");
        }
    }
    if (p1.length <= 0 || p2.length <= 0 || p1 != p2 || p1.length <= 6 || p2.length <= 6) {
        VerError("lblTxtContrasena1", "La contraseña sea igual a la verficación y tenga más de 5 caracteres");
        VerError("lblTxtContrasena2", "La contraseña sea igual a la verficación y tenga más de 5 caracteres");
        return false;
    } else {
        VerError2("lblTxtContrasena1", "Contraseña");
        VerError2("lblTxtContrasena2", "Verificación de contraseña");

    }
    while (!espacios && (cont < document.querySelector('#txtContrasenna1').value.length)) {
        if (p1.charAt(cont) == " ")
            espacios = true;
        cont++;
    }

    if (espacios) {
        VerError("lblTxtContrasena1", "Estos campos no pueden tener esapacios en blanco");
        VerError("lblTxtContrasena2", "Estos campos no pueden tener esapacios en blanco");

        return false;
    } else {
        VerError2("lblTxtContrasena1", "Contraseña");
        VerError2("lblTxtContrasena2", "Verificación de contraseña");
    }
    if (platitud == "") {
        VerError("location", "Ingrese una ubicación correcata");
        VerError("country", "Ingrese una ubicación correcata");
        return false;
    }
    return true;
}
/*Evita que la pagina se carge cuando le doy enter a algun input*/
$(document).ready(function () {

    $('form').keypress(function (e) {
        if (e == 13) {
            return false;
        }
    });

    $('input').keypress(function (e) {
        if (e.which == 13) {
            return false;
        }
    });
});
/*Pinta de rojo el elemto que ingresa por parametro y agrega un nuevo label*/
function VerError(label, dato) {
    var x = document.getElementById(label).style;
    x.color = "red";
    document.getElementById(label).innerHTML = dato;

}
/*Pinta de verde el elemento que ingresa por parametro y le agrega un dato*/
function VerError2(label, dato) {
    var x = document.getElementById(label).style;
    x.color = "green";
    document.getElementById(label).innerHTML = dato;
}
/*Pinta de verde el componente que ingresa por parametro*/
function datoCorrecto(componente) {
    var x = document.getElementById(componente).style;
    x.color = "green";
}
/*función carmbia el borde del elemento que recibe por parametro*/
function verdaderaFoto(componente) {
    document.getElementById(componente).style.borderColor = "green";
}
/*función carmbia el borde del elemento que recibe por parametro*/
function errorFoto(componente) {
    document.getElementById(componente).style.borderColor = "red";
}
/*leer la url del input tipo file "pone la image el la etiqueta img"*/
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('blah').src = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
    }
}
/*Crea el elemnto canvas, agregandole largo y ancho y parceando jpn,png*/
function getBase64Image(img) {
    var canvas = document.createElement("canvas");
    canvas.width = 100;
    canvas.height = 90;
    var ctx = canvas.getContext("2d");
    ctx.drawImage(img, 0, 0);
    var dataURL = canvas.toDataURL("image/png");
    return dataURL.replace(/^data:image\/(png|jpg);base64,/, "");
}
/*Obtiene el arreglo del local storange, lo parsea y lo agrega a la lista*/
function cargarUsuariosDos() {
    var listaUsuarios = localStorage.getItem('AllUsers');
    if (listaUsuarios != null) {
        Usuarios = JSON.parse(listaUsuarios);
    } else {
        Usuarios = [];
    }
    return Usuarios;
}
/*Carga los camponetes cuando el usuario le dio recordar contraseña*/
function cargarComponentesUsu() {
    initMap();
    if (sessionStorage.getItem('latitud') != null) {
        editar = true;
        GetAddress(sessionStorage.getItem('latitud'), sessionStorage.getItem('longitud'));
    }
    cargarSessionStore();
    if (obtenerCookie("USUARIO") == "" || obtenerCookie("USUARIO") == null) {
        document.getElementById('input-checkbox-loginc').checked = false;
    } else {
        document.getElementById('input-checkbox-loginc').click();
        var usu = document.getElementById('txt-usuario');
        var contra = document.getElementById('txt-contrasena');
        usu.value = obtenerCookie("USUARIO");;
        contra.value = obtenerCookie("CONTRASEÑA");
    }
}
/*Verifica el usuario y carga la foto  correo y nombre del usuario, encaso de 
que no quiera recordar la contraseña elimina el cookie*/
function preLoad(pUsuario) {
    cargarUsuarios();
    for (i = 0; i < Usuarios.length; i++) {
        if ('"' + Usuarios[i].usuario + '"' == pUsuario) {
            document.getElementById("headerEmail").innerHTML = Usuarios[i].email;
            document.getElementById("headerName").innerHTML = Usuarios[i].nombre;
            bannerImg = document.getElementById('profile-img');
            bannerImg.src = "data:image/png;base64," + Usuarios[i].fotoU;
            if (editar == true) {
                bannerImg = document.getElementById('blah');
                bannerImg.src = "data:image/png;base64," + Usuarios[i].fotoU;
                if (editar == true) {
                    document.getElementById("txtNombre").value = Usuarios[i].nombre;
                    document.getElementById("txtEmail").value = Usuarios[i].email;
                    document.getElementById("txtUsuario").value = Usuarios[i].usuario;
                    document.getElementById("txtContrasenna1").value = Usuarios[i].contrasenna;
                    document.getElementById("txtContrasenna2").value = Usuarios[i].contrasenna;
                    platitud = sessionStorage.getItem('latitud');
                    plongitud = sessionStorage.getItem('longitud');
                    buscarIndex("radiusFrom", Usuarios[i].tipoServicio);
                    GetAddress();
                }
            }
            usuarioActual.nombreUsuario = Usuarios[i].nombre;
            usuarioActual.tipoUsuario = "vendedor";
            usuarioActual.usuario = Usuarios[i].usuario;
            capturarLoginUsuario(Usuarios[i].usuario);
            return;
        }
    }
    /*busca cliente*/
    Usuarios = [];
    cargarUsuariosDos();
    for (i = 0; i < Usuarios.length; i++) {
        if ('"' + Usuarios[i].usuario + '"' == pUsuario) {
            document.getElementById("headerEmail").innerHTML = Usuarios[i].email;
            document.getElementById("headerName").innerHTML = Usuarios[i].nombre + " " + Usuarios[i].apellidoPaterno + " " + Usuarios[i].apellidoMaterno;
            bannerImg = document.getElementById('profile-img');
            bannerImg.src = "data:image/png;base64," + Usuarios[i].fotoU;
            capturarLoginUsuario(Usuarios[i].usuario);
            usuarioActual.nombreUsuario = Usuarios[i].nombre;
            usuarioActual.tipoUsuario = "comprador";
            usuarioActual.usuario = Usuarios[i].usuario;
            return;
        }
    }
}
/*crea un cooki, clave nombre del cookie, valor del cookie, y expiracíon del mismo*/
function crearCookieuSUARIO(clave, valor, diasexpiracion) {
    var d = new Date();
    d.setTime(d.getTime() + (diasexpiracion * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = clave + "=" + valor + "; " + expires;
}

/*Obtine y retorna el cookie por medio de la clave*/
function obtenerCookie(clave) {
    var name = clave + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}
/*función verifica si hay un usuario en el session Storange y si que carge sus datos a interfaz*/
function cargarSessionStore() {

    var nombreUsuario = sessionStorage.getItem('loginUsuarios');
    if (nombreUsuario != "" || nombreUsuario != null) {
        preLoad(nombreUsuario);
    }
}
/*Verifica el usuario y carga la foto  correo y nombre del usuario, encaso de 
que no quiera recordar la contraseña elimina el cookie*/
function Ingresar() {
    cargarUsuarios();
    var usuario = document.querySelector('#txt-usuario').value;
    var contra = document.querySelector('#txt-contrasena').value;
    var check = document.getElementById('input-checkbox-loginc').checked;
    for (i = 0; i < Usuarios.length; i++) {
        if (Usuarios[i].usuario == usuario && Usuarios[i].contrasenna == contra) {
            if (check == true) {
                crearCookieuSUARIO("USUARIO", usuario, 900);
                crearCookieuSUARIO("CONTRASEÑA", contra, 900);
            } else {
                eliminarCookie("USUARIO");
                eliminarCookie("CONTRASEÑA");
            }

            capturarLoginUsuario(Usuarios[i].usuario);
            window.location = "RegistroVendedor.html";
            return;
        }
    }
    Usuarios = [];
    cargarUsuariosDos();
    for (i = 0; i < Usuarios.length; i++) {
        if (Usuarios[i].usuario == usuario && Usuarios[i].contrasenna == contra) {
            if (check == true) {
                crearCookieuSUARIO("USUARIO", usuario, 900);
                crearCookieuSUARIO("CONTRASEÑA", contra, 900);
            } else {
                eliminarCookie("USUARIO");
                eliminarCookie("CONTRASEÑA");
            }
            capturarLoginUsuario(Usuarios[i].usuario);
            window.location = "RegistroUsuario.html";
            return;
        }
    }
    alert("No se encontro el usuario");
}
/*Captura el usuario logeado guardandolo en el session storange*/
function capturarLoginUsuario(pUsuarioActual) {
    sessionStorage.setItem('loginUsuarios', JSON.stringify(pUsuarioActual));
}

/*Elimina el cookie por medo del nombre*/
function eliminarCookie(name) {
    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}
/*Carga los componentes del mapa, ubicación, tipo satelita o relieve
posición y input para buscar x lugar*/
function initMap() {
    var la = parseFloat(sessionStorage.getItem('latitud'));
    var lo = parseFloat(sessionStorage.getItem('longitud'));
    if (sessionStorage.getItem('latitud') != null) {
        editar = true;
        var rLatitud = la;
        var rLongitud = lo;
    } else {
        var rLatitud = 10.0000000;
        var rLongitud = -84.0000000;
    }
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {
            lat: rLatitud,
            lng: rLongitud
        },
        zoom: 15
    });
    var input = document.getElementById('searchInput');
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.bindTo('bounds', map);

    var infowindow = new google.maps.InfoWindow();
    var marker = new google.maps.Marker({
        map: map,
        anchorPoint: new google.maps.Point(0, -29)
    });

    autocomplete.addListener('place_changed', function () {
        infowindow.close();
        marker.setVisible(false);
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            window.alert("Ingrese una dirección correcta");
            return;
        }

        // If the place has a geometry, then present it on a map.
        if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
        } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);
        }
        marker.setIcon(({
            url: place.icon,
            size: new google.maps.Size(71, 71),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),
            scaledSize: new google.maps.Size(35, 35)
        }));
        marker.setPosition(place.geometry.location);
        marker.setVisible(true);

        var address = '';
        if (place.address_components) {
            address = [
            (place.address_components[0] && place.address_components[0].short_name || ''),
            (place.address_components[1] && place.address_components[1].short_name || ''),
            (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
        }

        infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
        infowindow.open(map, marker);

        //Location details
        for (var i = 0; i < place.address_components.length; i++) {
            if (place.address_components[i].types[0] == 'country') {
                document.getElementById('country').innerHTML = place.address_components[i].long_name;
            }
        }
        platitud = place.geometry.location.lat();
        plongitud = place.geometry.location.lng();
        datoCorrecto("location");
        datoCorrecto("country");
        document.getElementById('location').innerHTML = place.formatted_address;
    });
}
/*funcion obtiene al direccion en string por medio de la latitud y la longitud*/
function GetAddress() {
    var lat = parseFloat(sessionStorage.getItem('latitud'));
    var lng = parseFloat(sessionStorage.getItem('longitud'));
    var latlng = new google.maps.LatLng(lat, lng);
    var geocoder = geocoder = new google.maps.Geocoder();
    geocoder.geocode({
        'latLng': latlng
    }, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            if (results[1]) {

                document.getElementById('location').innerHTML = results[1].formatted_address;
                document.getElementById('country').innerHTML = results[3].formatted_address;
            }
        }
    });
}
/*funcion carga la pagina del perfil dependiendo del usuario*/
function verPerfiles(){
    if(usuarioActual.tipoUsuario == "comprador"){
        window.location ="VerPerfil.html";
    }else if(usuarioActual.tipoUsuario == "vendedor"){
        window.location = "VerPerfilEmpresa.html";
    }else{
        alert("No puedes acceder a esta información por que no estas registrado");
    }
}
/*funcion elimina el sessionStorange y carga la pagina principal*/
function cerrarSesion(){
  sessionStorage.clear();
  window.location = "index.html";
  return;
}
/*funcion verifica que el usuario sea vendedor y si lo es carga la pagina para que agrege un nuevo producto*/
function addProducto(){
  if (usuarioActual.tipoUsuario === "vendedor") {
    window.location = "NuevoProducto.html";
}else{
    alert("No tienes permisos para esta acción");
}
}
/*funcion vefica que este un usurio logeado y si lo esta cagar la pagina para cambiar contraseña*/
function olvidoContrasena(){
  if(usuarioActual.tipoUsuario =="" || usuarioActual.tipoUsuario == ""){
      window.location = "CambioContrasenna.html";
  }else{
      alert("Actualmente estas registrado");
  }
}
/*jquery cambia el tipo de dato del inpus a texto y contraseña esto para mostrar la contrasenña*/
$("#txtContrasenna1").on("keyup",function(){
    if($(this).val())
        $(".glyphicon-eye-open").show();
    else
        $(".glyphicon-eye-open").hide();
});
$(".glyphicon-eye-open").mousedown(function(){
    $("#txtContrasenna1").attr('type','text');
}).mouseup(function(){
    $("#txtContrasenna1").attr('type','password');
}).mouseout(function(){
    $("#txtContrasenna1").attr('type','password');
});

/*jquery cambia el tipo de dato del inpus a texto y contraseña esto para mostrar la contrasenña*/
$("#txtContrasenna2").on("keyup",function(){
    if($(this).val())
        $(".glyphicon-eye-open").show();
    else
        $(".glyphicon-eye-open").hide();
});
$(".glyphicon-eye-open").mousedown(function(){
    $("#txtContrasenna2").attr('type','text');
}).mouseup(function(){
    $("#txtContrasenna2").attr('type','password');
}).mouseout(function(){
    $("#txtContrasenna2").attr('type','password');
});
/*Funcion guarda un un valor en sessionStorange para cargar la pagina de buscar y cargar ese elemento*/
function buscar(){
  var CaT = document.getElementById("selectCategoriaBuscar");
  var value = CaT.options[CaT.selectedIndex].value;
  var text = CaT.options[CaT.selectedIndex].text;
  var sCaT = document.getElementById("selectDistancia");
  var value = sCaT.options[sCaT.selectedIndex].value;
  var finaSCategoria = sCaT.options[sCaT.selectedIndex].value;
  if(document.getElementById("btn-search").value == ""){
   sessionStorage.setItem('valorBuscar', "-");
}else{
  sessionStorage.setItem('valorBuscar', document.getElementById("btn-search").value);
}
sessionStorage.setItem('categoria', text);
sessionStorage.setItem('distancia', finaSCategoria);
window.location = "BuscarArticulo.html";

}
/*carga  el tipo de servicio al select por medio del index del select*/
function buscarIndex(lmnt, etxt){
  var x = document.getElementById(lmnt);
  for(var i=0; i < x.options.length; i++){
     if (x.options[i].text === etxt){
        x.options[i].selected = true;

  }
}
}
/*funcion elimina mi perfil del localStorange*/
function eliminarCuenta() {
    var lcStorange = JSON.parse(localStorage.getItem('vendedores'));
    lcStorange.splice(parseInt(sessionStorage.getItem("posicion")), 1);
    localStorage.setItem('vendedores', JSON.stringify(lcStorange));
    window.location = "index.html";
}