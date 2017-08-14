var platitud = "";
var plongitud = "";
var selFoto = false;
var Usuarios = [];
var Vendedores = [];

/*Eventos de clicks en los botones*/
window.addEventListener('load', cargarComponentesUsu, false);
document.querySelector('#btnIngresar').addEventListener('click', capturar);
document.querySelector('#btn-ingresar-navbar').addEventListener('click', Ingresar);
document.querySelector('#blah').addEventListener('click', inputProfilePicture);

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
    /*Obtine la foto de la etiqueta img blah*/
    bannerImage = document.getElementById('blah');
    var imgData = getBase64Image(bannerImage);
    var nombre = document.querySelector('#txtNombre').value,
        apellidoPaterno = document.querySelector('#txtApellidoPaterno').value,
        apellidoMaterno = document.querySelector('#txtApellidoMaterno').value,
        email = document.querySelector('#txtEmail').value,
        edad = document.querySelector('#txtEdad').value,
        latitud = platitud,
        longitud = plongitud,
        usuario = document.querySelector('#txtUsuario').value,
        contrasenna1 = document.querySelector('#txtContrasenna1').value,
        contrasenna2 = document.querySelector('#txtContrasenna2').value,
        fotoPerfil = imgData;
    if (validarUsuario(nombre, apellidoPaterno, apellidoMaterno, contrasenna1, contrasenna2, email, edad, usuario) == true) {
        addUsuarios(nombre, apellidoPaterno, apellidoMaterno, email, edad, latitud, longitud, usuario, contrasenna1, fotoPerfil);
    }
}

/*Crea el objeto con los parametos para añdiarlos a la lista pot el push*/
function addUsuarios(pNombre, pApellidoPaterno, pApellidoMaterno, pEmil, pEdad, pLatitud, pLongitud, pUsuario, pContrasenna, pFoto) {
    var nuevoUsuario = {
        nombre: pNombre,
        apellidoPaterno: pApellidoPaterno,
        apellidoMaterno: pApellidoMaterno,
        email: pEmil,
        edad: pEdad,
        latitud: pLatitud,
        longitud: pLongitud,
        usuario: pUsuario,
        contrasenna: pContrasenna,
        fotoU: pFoto
    };
    Usuarios.push(nuevoUsuario);
    guardarLista(Usuarios);
}
/*Guarda la el objeto que recibe por para metro al local storange*/
function guardarLista(NuevoUsuario) {
    localStorage.setItem('AllUsers', JSON.stringify(NuevoUsuario));
    window.location = "RegistroUsuario.html";
}

/*Obtiene el arreglo del local storange, lo parsea y lo agrega a la lista*/
function cargarUsuarios() {
    var listaUsuarios = localStorage.getItem('AllUsers');
    if (listaUsuarios != null) {
        Usuarios = JSON.parse(listaUsuarios);
    } else {
        Usuarios = [];
    }
    return Usuarios;
}
/*Obtiene el arreglo del local storange, lo parsea y lo agrega a la lista*/
function cargarVendedores() {
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
function validarUsuario(nombre, apellidoUno, apellidoDos, p1, p2, valor, pEdad, usu) {
    var espacios = false;
    var cont = 0;
    if (selFoto == false) {
        errorFoto("blah");
        alert("Error, Ingrese una foto");
        return false;
    } else {
        verdaderaFoto("blah");
    }
    if (nombre.length <= 3) {
        VerError("labelNombre", "Nombre (verifique este dato)");
        return false;
    } else {
        VerError2("labelNombre", "Nombre");
    }
    if (apellidoUno.length <= 3) {

        VerError("labelApellidoUno", "Apellido Paterno (verifique este dato)");
        return false;
    } else {
        VerError2("labelApellidoUno", "Apellido Paterno");
    }
    if (apellidoDos.length <= 3) {

        VerError("txtApellidoDos", "Apellido Materno (verifique este dato)");
        return false;
    } else {
        VerError2("txtApellidoDos", "Apellido Materno");
    }
    if (pEdad <= 0 || pEdad == "") {
        VerError("labelTxtEdad", "Edad (ingresa una edad correcta)");
        return false;
    } else {
        VerError2("labelTxtEdad", "Edad");
    }
    if (!/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(valor)) {
        VerError("labelTxtEmal", "Email (Verifique la dirección de email)");
        return false;

    } else {
        VerError2("labelTxtEmal", "Email");
    }
    if (usu.length <= 3 || verfificarLogin(usu) == false) {
        VerError("labelTxtUsuario", "Usuario (verifique este dato)");
        return false;
    } else {
        VerError2("labelTxtUsuario", "Usuario");
    }
    if (p1.length <= 0 || p2.length <= 0 || p1 != p2 || p1.length <= 6 || p2.length <= 6) {
        VerError("lblTxtContrasena1", "Contraseña debe tener mas de caracteres o que sean iguales");
        VerError("lblTxtContrasena2", "Verificación de contraseña debe tener mas de caracteres o que sean iguales");
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
        VerError("lblTxtContrasena1", "Contraseña debe tener mas de caracteres o que sean iguales");
        VerError("lblTxtContrasena2", "Verificación de contraseña debe tener mas de caracteres o que sean iguales");

        return false;
    } else {
        VerError2("lblTxtContrasena1", "Contraseña");
        VerError2("lblTxtContrasena2", "Verificación de contraseña");
    }
    if (platitud == "") {
        VerError("location", "Ingrese una ubicación correcata");
        VerError("country", "Ingrese una ubicación correcata");
        return false;
    } else {
        datoCorrecto("location");
        datoCorrecto("country");
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

function verdaderaFoto(componente) {
    document.getElementById(componente).style.borderColor = "green";
}

function errorFoto(componente) {
    document.getElementById(componente).style.borderColor = "red";
}
/*leer la url del input tipo file "pone la image el la etiqueta img"*/
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('blah').src = e.target.result;
            selFoto = true;
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

/*Carga los camponetes cuando el usuario le dio recordar contraseña*/
function cargarComponentesUsu() {
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

function cargarSessionStore() {

    var nombreUsuario = sessionStorage.getItem('loginUsuarios');
    if (nombreUsuario != "" || nombreUsuario != null) {
        preLoad(nombreUsuario);
    }
}

/*Verifica el usuario y carga la foto  correo y nombre del usuario, encaso de 
que no quiera recordar la contraseña elimina el cookie*/
function preLoad(pUsuario) {
    cargarUsuarios();
    for (i = 0; i < Usuarios.length; i++) {
        if ('"' + Usuarios[i].usuario + '"' == pUsuario) {
            document.getElementById("headerEmail").innerHTML = Usuarios[i].email;
            document.getElementById("headerName").innerHTML = Usuarios[i].nombre + " " + Usuarios[i].apellidoPaterno + " " + Usuarios[i].apellidoMaterno;
            bannerImg = document.getElementById('profile-img');
            bannerImg.src = "data:image/png;base64," + Usuarios[i].fotoU;
            capturarLoginUsuario(Usuarios[i].usuario);
            return;
        }
    }
    cargarVendedores();
    for (i = 0; i < Usuarios.length; i++) {
        if ('"' + Usuarios[i].usuario + '"' == pUsuario) {
            document.getElementById("headerEmail").innerHTML = Usuarios[i].email;
            document.getElementById("headerName").innerHTML = Usuarios[i].nombre;
            bannerImg = document.getElementById('profile-img');
            bannerImg.src = "data:image/png;base64," + Usuarios[i].fotoU;
            capturarLoginUsuario(Usuarios[i].usuario);
            return;
        }
    }
    alert("No se encontro el usuario");
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
            alert(document.getElementById("headerEmail").innerHTML = Usuarios[i].email);

            document.getElementById("headerEmail").innerHTML = Usuarios[i].email;
            document.getElementById("headerName").innerHTML = Usuarios[i].nombre + " " + Usuarios[i].apellidoPaterno + " " + Usuarios[i].apellidoMaterno;
            bannerImg = document.getElementById('profile-img');
            bannerImg.src = "data:image/png;base64," + Usuarios[i].fotoU;
            capturarLoginUsuario(Usuarios[i].usuario);
            window.location = "RegistroUsuario.html";
            return;
        }
    }
    Usuarios = [];
    cargarSessionStore();
    for (i = 0; i < Usuarios.length; i++) {
        if (Usuarios[i].usuario == usuario && Usuarios[i].contrasenna == contra) {
            if (check == true) {
                crearCookieuSUARIO("USUARIO", usuario, 900);
                crearCookieuSUARIO("CONTRASEÑA", contra, 900);
            } else {
                eliminarCookie("USUARIO");
                eliminarCookie("CONTRASEÑA");
            }
            alert(document.getElementById("headerEmail").innerHTML = Usuarios[i].email);

            document.getElementById("headerEmail").innerHTML = Usuarios[i].email;
            document.getElementById("headerName").innerHTML = Usuarios[i].nombre;
            bannerImg = document.getElementById('profile-img');
            bannerImg.src = "data:image/png;base64," + Usuarios[i].fotoU;
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
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {
            lat: 10.0000000,
            lng: -84.0000000
        },
        zoom: 9
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
            if (place.address_components[i].types[0] == 'postal_code') {
                document.getElementById('postal_code').innerHTML = place.address_components[i].long_name;
            }
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
