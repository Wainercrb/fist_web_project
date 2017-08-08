window.addEventListener('load', cargarSessionStore, false);
var usuario = [];
var usuarioActual;


function cargarSessionStore() {
    var nombreUsuario = sessionStorage.getItem('loginUsuarios');
    cargarTodo(nombreUsuario);
}


function cargarTodo(pUsuario) {


    var listaUsuarios = localStorage.getItem('AllUsers');
    if (listaUsuarios != null) {
        usuario = JSON.parse(listaUsuarios);
        for (i = 0; i < usuario.length; i++) {
            if ('"'+usuario[i].usuario+'"' == pUsuario ) {
                usuarioActual = usuario[i];
                document.getElementById("headerEmail").innerHTML = usuario[i].email;
                return;
            }
        }

    } else {
        usuario = [];
        alert("No hay registros en el local storange");
    }
    if (listaUsuarios.length == 2) {
        alert("No hay registros en el local storange");
    }
    return usuario;
}
