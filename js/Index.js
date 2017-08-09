window.addEventListener('load', cargarSessionStore, false);
var usuario = [];
var usuarioActual;


function cargarSessionStore() {

    var nombreUsuario = sessionStorage.getItem('loginUsuarios');
    if (nombreUsuario != "" || nombreUsuario != null) {
        cargarTodo(nombreUsuario);
    }
}


function cargarTodo(pUsuario) {
    var listaUsuarios = localStorage.getItem('AllUsers');
    if (listaUsuarios != null) {
        usuario = JSON.parse(listaUsuarios);
        for (i = 0; i < usuario.length; i++) {
            if ('"' + usuario[i].usuario + '"' == pUsuario) {
                usuarioActual = usuario[i];
                document.getElementById("headerEmail").innerHTML = usuario[i].email;
                document.getElementById("headerName").innerHTML = usuario[i].nombre + " " + usuario[i].apellidoPaterno + " " + usuario[i].apellidoMaterno;
                bannerImg = document.getElementById('profile-img');
                bannerImg.src = "data:image/png;base64," + usuario[i].fotoU;
                return;
            }
        }

    } else {
        usuario = null;
    }
    return usuario;
}



