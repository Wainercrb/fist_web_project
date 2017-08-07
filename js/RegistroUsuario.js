var platitud;
var plongitud;
var Usuarios = [];

document.querySelector('#btnIngresar').addEventListener('click', capturar);

function capturar() {
    var nombre = document.querySelector('#txtNombre').value,
        apellidoPaterno = document.querySelector('#txtApellidoPaterno').value,
        apellidoMaterno = document.querySelector('#txtApellidoMaterno').value,
        email = document.querySelector('#txtEmail').value,
        edad = parseInt(document.querySelector('#txtEdad').value),
        latitud = platitud,
        longitud = plongitud,
        usuario = document.querySelector('#txtUsuario').value,
        contrasenna1 = document.querySelector('#txtContrasenna1').value,
        contrasenna2 = document.querySelector('#txtContrasenna2').value;
    if (validarPasswords(nombre, apellidoPaterno, apellidoMaterno, contrasenna1, contrasenna2, email, edad, usuario) == true) {
        addUsuarios(nombre, apellidoPaterno, apellidoMaterno, email, edad, latitud, longitud, usuario, contrasenna1);
    }
}

function addUsuarios(pNombre, pApellidoPaterno, pApellidoMaterno, pEmil, pEdad, pLatitud, pLongitud, pUsuario, pContrasenna) {

    var nuevoUsuario = {
        nombre: pNombre,
        apellidoPaterno: pApellidoPaterno,
        apellidoMaterno: pApellidoMaterno,
        email: pEmil,
        edad: pEdad,
        latitud: pLatitud,
        longitud: pLongitud,
        usuario: pUsuario,
        contrasenna: pContrasenna
    };
    
    Usuarios.push(nuevoUsuario);
    guardarLista(Usuarios);
}

function guardarLista(NuevoUsuario) {
    localStorage.setItem('AllUsers', JSON.stringify(NuevoUsuario));
    window.location = "RegistroUsuario.html";
}




function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {
            lat: 10.0000000,
            lng: -84.0000000
        },
        zoom: 13
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
        document.getElementById('location').innerHTML = place.formatted_address;
    });


}

function validarPasswords(nombre, apellidoUno, apellidoDos, p1, p2, valor, pEdad, usu) {
    var edad = parseInt(pEdad);
    var espacios = false;
    var cont = 0;

    if (nombre.length <= 3) {

        VerError("labelNombre");
        return false;
    }
    if (apellidoUno.length <= 3) {

        VerError("labelApellidoUno");
        return false;
    }
    if (apellidoDos.length <= 3) {

        VerError("txtApellidoDos");
        return false;
    }
    if (apellidoDos.length <= 3) {

        VerError("txtApellidoDos");
        return false;
    }


    if (usu.length <= 3) {

        VerError("labelTxtUsuario");
        return false;
    }

    if (p1.length <= 0 || p2.length <= 0) {
        alert("Los campos de la password no pueden quedar vacios");
        VerError("#txtContrasenna1");
        VerError("#txtContrasenna2");
        return false;
    }
    if (!/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(valor)) {
        VerError("labelTxtEmal");
        alert("La dirección de email es incorrecta!.");
        return false;

    }
    if (p1 != p2) {
        VerError("labelContrasena1");
        VerError("labelContrasena2");
        alert("Las passwords deben de coincidir");
        return false;
    }
    while (!espacios && (cont < document.querySelector('#txtContrasenna1').value.length)) {
        if (p1.charAt(cont) == " ")
            espacios = true;
        cont++;
    }

    if (espacios) {
        VerError("labelContrasena1");
        VerError("labelContrasena2");
        alert("La contraseña no puede contener espacios en blanco");
        return false;
    }
    if (edad <= 0) {
        VerError("labelTxtEdad");
        alert("Ingresa una edad correcta");
    }
    if (p1.length <= 7) {
        alert("Ingrese una contraseña más grande");
        return false;
    }
    if (platitud == "") {
        alert("Ingresa una ubicación correcta");
        document.getElementById("txtContrasenna1").style.background = "red !important";
        return false;
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


function VerError(variable) {
    var x = document.getElementById(variable).style;
    x.color = "red"
}
