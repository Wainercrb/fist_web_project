
   document.querySelector('#btn-ingresarIP').addEventListener('click', bodyLogin);
   window.addEventListener('load', cargarDatosUsuario, false);
   document.querySelector('#btn-ingresar-navbar').addEventListener('click', Ingresar);
   document.querySelector('#btnIngresarPerfil').addEventListener('click', verPerfiles);
   document.querySelector('#btnNavBuscar').addEventListener('click', buscar);
   var Usuarios = [];
   var Vendedores = [];
   var vLatitud;
   var vLongitud;
   var distancia;
   var editar = false;
   var usuarioActual = {
       nombre: "",
       tipoUsuario: "",
       usuario: "",
       latitud: 0,
       longitud: 0
   };

function bodyLogin() {
    Usuarios = [];
       cargarUsuarios();
       var usuario = document.querySelector('#txt-usuarioIP').value;
       var contra = document.querySelector('#txt-contrasenaIP').value;
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
               window.location = "Ingresar.html";
               return;
           }
       }
       Usuarios = [];
       cargarVendedores();
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
               window.location = "Ingresar.html";
               return;
           }
       }
       alert("No se encontro el usuario");
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
           cargarProducosTabla();
       }
   }

   /*Verifica el usuario y carga la foto  correo y nombre del usuario, encaso de 
   que no quiera recordar la contraseña elimina el cookie*/
   function preLoad(pUsuario) {
       Usuarios = [];
       cargarUsuarios();
       for (i = 0; i < Usuarios.length; i++) {
           if ('"' + Usuarios[i].usuario + '"' == pUsuario) {
               document.getElementById("headerEmail").innerHTML = Usuarios[i].email;
               document.getElementById("headerName").innerHTML = Usuarios[i].nombre + " " + Usuarios[i].apellidoPaterno + " " + Usuarios[i].apellidoMaterno;
               bannerImg = document.getElementById('profile-img');
               bannerImg.src = "data:image/png;base64," + Usuarios[i].fotoU;
               capturarLoginUsuario(Usuarios[i].usuario);
               usuarioActual.nombre = Usuarios[i].nombre;
               usuarioActual.tipoUsuario = "comprador";
               usuarioActual.usuario = Usuarios[i].usuario;
               usuarioActual.latitud = Usuarios[i].latitud;
               usuarioActual.longitud = Usuarios[i].longitud;
               return;
           }
       }
       Usuarios = [];
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
               usuarioActual.latitud = Usuarios[i].latitud;
               usuarioActual.longitud = Usuarios[i].longitud;
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

   function cargarProductos() {
       var listaProductos = localStorage.getItem('Producto');
       if (listaProductos != null) {
           productos = JSON.parse(listaProductos);
       } else {
           productos = [];
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
       Usuarios = [];
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
               window.location = "Ingresar.html";
               return;
           }
       }
       Usuarios = [];
       cargarVendedores();
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
               window.location = "Ingresar.html";
               return;
           }
       }
       alert("No se encontro el usuario");
   }

      function cargarSessionStore() {

       
       var nombreUsuario = sessionStorage.getItem('loginUsuarios');
       if (nombreUsuario != "") {
           preLoad(nombreUsuario);
       }
   }
   function eliminarCookie(name) {
    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
   }

   
function verPerfiles(){
    if(usuarioActual.tipoUsuario == "comprador"){
        window.location ="VerPerfil.html";
    }else{
        
        window.location = "VerPerfilEmpresa.html";
    }
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
