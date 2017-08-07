var Usuarios = [];
document.querySelector('#btn-ingresar').addEventListener('click', verificarLogin);

window.addEventListener('load', cargar, false);

function cargar() {
    var usu = document.getElementById('txt-usuario');
    var contra = document.getElementById('txt-contrasena');
    usu.value = obtenerCookie("USUARIO");
    contra.value = obtenerCookie("CONTRASEÑA");
}

function capturar() {

    var usuario = document.querySelector('#txt-usuario').value,
        contra = document.querySelector('#txt-contrasena').value;
    
        addUsuarios(usuario, contra);
}
function addUsuarios(pUsuario, pContrasena) {

    var newUsuario = {
        usuario: pUsuario,
        contrase: pContrasena
        
    };

    console.log(newUsuario);
    Usuarios.push(newUsuario);
    guardarLista(Usuarios);


}

function guardarLista(NuevoUsuario) {
    sessionStorage.setItem('loginUsuarios', JSON.stringify(NuevoUsuario));
}
function verificarLogin() {
    cargarUsuarios();
    var usuario = document.querySelector('#txt-usuario').value;
    var contra = document.querySelector('#txt-contrasena').value;
    var check = document.getElementById('input-checkbox-loginc').checked;

    for (i = 0; i < Usuarios.length; i++) {
        if (Usuarios[i].usuario == usuario && Usuarios[i].contrasenna == contra) {
            if (check == true) {
                crearCookieuSUARIO("USUARIO", usuario, 900);
                crearCookieuSUARIO("CONTRASEÑA", contra, 900);
            }
            capturar();
            window.location = "index.html?"+usuario;
        } else {
            alert("no son iguales");
        }

    }
}

function crearCookieuSUARIO(clave, valor, diasexpiracion) {
    var d = new Date();
    d.setTime(d.getTime() + (diasexpiracion * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = clave + "=" + valor + "; " + expires;
}

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

function cargarUsuarios() {
    var listaUsuarios = localStorage.getItem('usuarios');
    if (listaUsuarios != null) {

        Usuarios = JSON.parse(listaUsuarios);
    } else {
        Usuarios = [];
        alert("No hay registros en el local storange");
    }
    alert(listaUsuarios.length);
    if (listaUsuarios.length === 2) {
        alert("No hay registros en el local storange");
    }
    return Usuarios;
}
