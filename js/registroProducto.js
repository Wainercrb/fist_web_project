var productos = [];
document.querySelector('#btnIngresar').addEventListener('click', capturar);
window.addEventListener('load', cargarDatosUsuario, false);
document.querySelector('#btn-ingresar-navbar').addEventListener('click', Ingresar);
var Usuarios = [];
var Vendedores = [];
var usuarioActua;

function capturar() {
    if (usuarioActua.tipoUsuario == "vendedor") {
        var CaT = document.getElementById("categoria");
        var value = CaT.options[CaT.selectedIndex].value;
        var text = CaT.options[CaT.selectedIndex].text;
        var sCaT = document.getElementById("subCategoria");
        var value = sCaT.options[sCaT.selectedIndex].value;
        var finaSCategoria = sCaT.options[sCaT.selectedIndex].text;
        var codigo = document.querySelector('#txtCodigo').value,
            nombre = document.querySelector('#txtNombre').value,
            marca = document.querySelector('#txtMarca').value,
            precio = document.querySelector('#txtPrecio').value,
            cantidad = document.querySelector('#txtCantidad').value,
            categoria = text,
            subCategoira = finaSCategoria,
            descripcion = document.querySelector('#txtDescripcion').value;

        addProductos(codigo, nombre, marca, precio, cantidad, categoria, subCategoira, descripcion);
    } else {
        alert("No tienes permisos para esta acción");
    }

}

function addProductos(pCodigo, pNombre, pMarca, pPrecio, pCantidad, pCategoria, pSubCategoria, pDescripcion) {

    var nuevoProducto = {
        codigo: pCodigo,
        nombre: pNombre,
        marca: pMarca,
        precio: pPrecio,
        cantidad: pCantidad,
        categoria: pCategoria,
        subCategoria: pSubCategoria,
        descripcion: pDescripcion
    };
    productos.push(nuevoProducto);
    guardarLista(productos);
}



function guardarLista(peopleList) {
    localStorage.setItem('Producto', JSON.stringify(productos));
}

/*Carga los camponetes cuando el usuario le dio recordar contraseña*/
function cargarDatosUsuario() {
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

function cargarSessionStore() {

    var nombreUsuario = sessionStorage.getItem('loginUsuarios');
    if (nombreUsuario != "") {
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
            usuarioActua = {
                nombre: Usuarios[i].nombre,
                tipoUsuario: "comprador",
                usuario: Usuarios[i].usuario
            };
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
            usuarioActua = {
                nombre: Usuarios[i].nombre,
                tipoUsuario: "vendedor",
                usuario: Usuarios[i].usuario
            };
            return;
        }
    }
    alert("No se encontro el usuario");
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
/*crea un cooki, clave nombre del cookie, valor del cookie, y expiracíon del mismo*/
function crearCookieuSUARIO(clave, valor, diasexpiracion) {
    var d = new Date();
    d.setTime(d.getTime() + (diasexpiracion * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = clave + "=" + valor + "; " + expires;
}
/*Captura el usuario logeado guardandolo en el session storange*/
function capturarLoginUsuario(pUsuarioActual) {
    sessionStorage.setItem('loginUsuarios', JSON.stringify(pUsuarioActual));
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
            document.getElementById("headerEmail").innerHTML = Usuarios[i].email;
            document.getElementById("headerName").innerHTML = Usuarios[i].nombre + " " + Usuarios[i].apellidoPaterno + " " + Usuarios[i].apellidoMaterno;
            bannerImg = document.getElementById('profile-img');
            bannerImg.src = "data:image/png;base64," + Usuarios[i].fotoU;
            capturarLoginUsuario(Usuarios[i].usuario);
            window.location = "NuevoProducto.html";
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
            document.getElementById("headerEmail").innerHTML = Usuarios[i].email;
            document.getElementById("headerName").innerHTML = Usuarios[i].nombre;
            bannerImg = document.getElementById('profile-img');
            bannerImg.src = "data:image/png;base64," + Usuarios[i].fotoU;
            capturarLoginUsuario(Usuarios[i].usuario);
            window.location = "NuevoProducto.html";
            return;
        }
    }
    alert("No se encontro el usuario");
}