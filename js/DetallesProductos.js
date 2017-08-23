var editar = false;
var Usuarios = [];
var Vendedores = [];
var usuarioActual;
var usuarioActual = {
    nombre: "",
    tipoUsuario: "",
    usuario: ""
};
/*Eventos de clicks en los botones*/
window.addEventListener('load', cargarComponentesUsu, false);
document.querySelector('#btn-ingresar-navbar').addEventListener('click', Ingresar);
document.querySelector('#btnIngresarPerfil').addEventListener('click', verPerfiles);
document.querySelector('#btnNavBuscar').addEventListener('click', buscar);

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
/*Carga los camponetes cuando el usuario le dio recordar contraseña*/
function cargarComponentesUsu() {
    if (parseInt(sessionStorage.getItem('verProducto')) >= 0) {
        editar = true;
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
            usuarioActua.nombre = Usuarios[i].nombre;
            usuarioActual.tipoUsuario = "comprador";
            usuarioActual.usuario = Usuarios[i].usuario;
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
            usuarioActual.nombre = Usuarios[i].nombre;
            usuarioActual.tipoUsuario = "vendedor";
            usuarioActual.usuario = Usuarios[i].usuario;
            if (editar === true) {
                verProductos();
            }
            return;
        }
    }
}

function verProductos() {
    cargarTodosProductos();
    var x = parseInt(sessionStorage.getItem('verProducto'));
    document.getElementById('hNombreProducto').innerHTML = "Nombre: "+productos[x].nombre;
    document.getElementById('pDescripcion').innerHTML = "Descripción:" +productos[x].descripcion;
    document.getElementById('sPrecio').innerHTML = "₡ " +productos[x].precio;
}
function cargarTodosProductos() {
    var listaUsuarios = localStorage.getItem('Producto');
    if (listaUsuarios != null) {
        productos = JSON.parse(listaUsuarios);
    } else {
        productos = [];
    }
    return productos;
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
            capturarLoginUsuario(Usuarios[i].usuario);
            window.location = "RegistroUsuario.html";
            return;
        }
    }
    alert("No se encontro el usuario");
}

function verPerfiles() {
    if (usuarioActual.tipoUsuario == "comprador") {
        window.location = "VerPerfil.html";
    } else {

        window.location = "VerPerfilEmpresa.html";
    }
}

function capturarLoginUsuario(pUsuarioActual) {
    sessionStorage.setItem('loginUsuarios', JSON.stringify(pUsuarioActual));
}
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