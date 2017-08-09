var platitud = "";
var plongitud = "";
var Usuarios = [];

document.querySelector('#btnIngresar').addEventListener('click', capturar);
document.querySelector('#blah').addEventListener('click', inputProfilePicture);

function inputProfilePicture() {

    var obj = document.getElementById("imgInp");
    if (obj) {
        obj.click();
    }

}

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
    if (validarPasswords(nombre, apellidoPaterno, apellidoMaterno, contrasenna1, contrasenna2, email, edad, usuario) == true) {
        addUsuarios(nombre, apellidoPaterno, apellidoMaterno, email, edad, latitud, longitud, usuario, contrasenna1, fotoPerfil);
    }
}


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

function guardarLista(NuevoUsuario) {
    localStorage.setItem('AllUsers', JSON.stringify(NuevoUsuario));
    window.location = "RegistroUsuario.html";
}

function cargarUsuarios() {

    var listaUsuarios = localStorage.getItem('AllUsers');
    if (listaUsuarios != null) {

        Usuarios = JSON.parse(listaUsuarios);
    } else {
        Usuarios = [];
    }
    return Usuarios;
}

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

function validarPasswords(nombre, apellidoUno, apellidoDos, p1, p2, valor, pEdad, usu) {
    var espacios = false;
    var cont = 0;

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


function VerError(label, dato) {
    var x = document.getElementById(label).style;
    x.color = "red";
    document.getElementById(label).innerHTML = dato;

}

function VerError2(label, dato) {
    var x = document.getElementById(label).style;
    x.color = "green";
    document.getElementById(label).innerHTML = dato;
}

function datoCorrecto(componente) {
    var x = document.getElementById(componente).style;
    x.color = "green";
}



function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            document.getElementById('blah').src = e.target.result;
        }

        reader.readAsDataURL(input.files[0]);
    }
}

function getBase64Image(img) {
    var canvas = document.createElement("canvas");
    canvas.width = img.width;
    canvas.height = img.height;

    var ctx = canvas.getContext("2d");
    ctx.drawImage(img, 0, 0);

    var dataURL = canvas.toDataURL("image/png");

    return dataURL.replace(/^data:image\/(png|jpg);base64,/, "");
}