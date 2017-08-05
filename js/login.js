var Usuarios = [];
document.querySelector('#btn-ingresar').addEventListener('click', verificarLogin);

function verificarLogin() {
var usuario = document.querySelector('#txt-usuario').value;
var telefono = document.querySelector('#txt-contrasena').value;

 }

function cargarUsuarios(){    
     var listaUsuarios = localStorage.getItem('lisOfPeople');
    if (temList != null) {

        Usuarios = JSON.parse(temList);
    } else {
        Usuarios = [];
        alert("No hay registros en el local storange");
    }
    alert(temList.length);
    if (temList.length === 2){
        alert("No hay registros en el local storange");
    }
    return Usuarios;
}
