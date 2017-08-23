
/*Eventos de los botones del html cambio contraeña*/
document.querySelector('#btn-ingresarIP').addEventListener('click', cambiarContrasena);
window.addEventListener('load', cargarDatosUsuario, false);
document.querySelector('#btn-ingresar-navbar').addEventListener('click', Ingresar);
document.querySelector('#btnIngresarPerfil').addEventListener('click', verPerfiles);
document.querySelector('#btnNavBuscar').addEventListener('click', buscar);
document.querySelector('#addProduct').addEventListener('click', addProducto);
document.querySelector('#btnOlvidoContrasena').addEventListener('click', olvidoContrasena);
document.querySelector('#btnCerrarCesion').addEventListener('click', cerrarSesion);
/*Variables y arreglos y objetos*/
var Usuarios = [];
var Vendedores = [];
var vLatitud;
var vLongitud;
var distancia;
var encontro = false;
var editar = false;
var usuarioActual = {
 nombre: "",
 tipoUsuario: "",
 usuario: "",
 latitud: 0,
 longitud: 0
};

var cpd = {
  nombre :"",
  apellidoUno : "",
  apellidoDos : "",
  email : "",
  edad :"",
  lt : "",
  lg : "",
  us : "",
  ct : "",
  ft : ""
};
var vd = {
  tp : "",
  nombre :"",
  email : "",
  us : "",
  ct : "",
  tser: "",
  lt : "",
  lg : "",
  ft : ""
};
/*Carga los camponetes cuando el usuario le dio recordar contraseña*/
function cargarDatosUsuario() {
  document.getElementById("txt-contrasena1").disabled = true;
  document.getElementById("txt-contrasena2").disabled = true;
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
/*Carga los usuarios que estan guardados en el session storange*/
function cargarSessionStore() {   
 var nombreUsuario = sessionStorage.getItem('loginUsuarios');
 if (nombreUsuario != "") {
   preLoad(nombreUsuario);
   cargarProducosTabla();
 }
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
               window.location = "CambioContrasenna.html";
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
               window.location = "CambioContrasenna.html";
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

        /*funcion agrega el item a buscar en el session storange para posteriormente abrir la pagina de buscar, y cargar el elemento*/ 
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
      /*funcion verifica que usuario esta logeado para abrir su página dependiendo del usuario*/
      function verPerfiles(){
        if(usuarioActual.tipoUsuario == "comprador"){
          window.location ="VerPerfil.html";
        }else if(usuarioActual.tipoUsuario == "vendedor"){
          window.location = "VerPerfilEmpresa.html";
        }else{
          alert("No puedes acceder a esta información por que no estas registrado");
        }
      }
      /*función elimina el session storange y carga la página index*/
      function cerrarSesion(){
        sessionStorage.clear();
        window.location = "index.html";
      }
      /*funcion carga el usario guardado para cargar sus datos y que se muestren en interfaz*/
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
            if (editar == true) {
              bannerImg = document.getElementById('blah');
              bannerImg.src = "data:image/png;base64," + Usuarios[i].fotoU;
              document.getElementById("txtNombre").value = Usuarios[i].nombre;
              document.getElementById("txtApellidoPaterno").value = Usuarios[i].apellidoPaterno;
              document.getElementById("txtApellidoMaterno").value = Usuarios[i].apellidoMaterno;
              document.getElementById("txtEdad").value = parseInt(Usuarios[i].edad);
              document.getElementById("txtEmail").value = Usuarios[i].email;
              document.getElementById("txtUsuario").value = Usuarios[i].usuario;
              document.getElementById("txtContrasenna1").value = Usuarios[i].contrasenna;
              document.getElementById("txtContrasenna2").value = Usuarios[i].contrasenna;
              platitud = parseInt(sessionStorage.getItem('latitud'));
              plongitud = parseInt(sessionStorage.getItem('longitud'));
              GetAddress();
            }
            usuarioActual.nombre = Usuarios[i].nombre;
            usuarioActual.tipoUsuario = "comprador";
            usuarioActual.usuario = Usuarios[i].usuario;
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
           return;
         }
       }
     }
     /*funcion cambia la contraseña*/
     function  cambiarContrasena(){
       Usuarios = [];
       cargarUsuarios();
       var valorIngresado = document.querySelector('#txtUsuarioEmail').value;
       var ctUno = document.querySelector('#txt-contrasena1').value;
       var ctDos = document.querySelector('#txt-contrasena2').value;            
       for (var i = 0; i < Usuarios.length; i++) {
         if (Usuarios[i].usuario == valorIngresado && encontro == false) {
           var cfUno = confirm("Realmente desea cambiar contraña, si su respuesta es si? Ingrese la contraseña y su verificación y aceptar");
           if(cfUno == false){
            return;
          }
          cpd.nombre = Usuarios[i].nombre;
          cpd.apellidoUno =  Usuarios[i].apellidoPaterno;
          cpd.apellidoDos =  Usuarios[i].apellidoMaterno;
          cpd.email =  Usuarios[i].email;
          cpd.edad =  Usuarios[i].edad;
          cpd.lt = Usuarios[i].latitud;
          cpd.lg = Usuarios[i].longitud; 
          cpd.us = Usuarios[i].usuario;
          cpd.ct = ctUno;
          cpd.ft =  Usuarios[i].fotoU;
          document.getElementById("txt-contrasena1").disabled = false;
          document.getElementById("txt-contrasena2").disabled = false;
          encontro = true;
          editarNuevoUsuario(i);
          return;
        }
        if(cpd.us == valorIngresado  && encontro == true){
          if(ctUno.length > 5 && ctUno == ctDos){
           addUsuarios(cpd.nombre, cpd.apellidoUno, cpd.apellidoDos, cpd.email, cpd.edad, cpd.lt, cpd.lg, cpd.us, ctUno, cpd.ft);
           alert("Contraseña  reestablecida correctamente");
           window.location = "CambioContrasenna.html";
           return;
         }else{
          alert("Verifique la contraseña");
          return;
        }
      }
    }
    Usuarios = [];
    cargarVendedores();
    for (i = 0; i < Usuarios.length; i++) {
      if (Usuarios[i].usuario == valorIngresado && encontro == false) {
       var cfUno = confirm("Realmente desea cambiar contraña, si su respuesta es si? Ingrese la contraseña y su verificación y aceptar");
       if(cfUno == false){
        return;
      }
      vd.tp = Usuarios[i].tipoUsuario;
      vd.nombre =  Usuarios[i].nombre;
      vd.email =  Usuarios[i].email;
      vd.us = Usuarios[i].usuario;
      vd.tser = Usuarios[i].tipoServicio;
      vd.lt = Usuarios[i].latitud;
      vd.lg = Usuarios[i].longitud; 
      vd.ft =  Usuarios[i].fotoU;
      document.getElementById("txt-contrasena1").disabled = false;
      document.getElementById("txt-contrasena2").disabled = false;
      encontro = true;
      editarVendedor(i);
      return;
    }
    if(vd.us == valorIngresado  && encontro == true){
      if(ctUno.length > 5 && ctUno == ctDos){
       addVededor(vd.tp, vd.nombre, vd.email, vd.us, ctUno, vd.tser, vd.lt, vd.lg, vd.ft);
       alert("Contraseña  reestablecida correctamente");
       window.location = "CambioContrasenna.html";
       return;
     }else{
      alert("Verifique la contraseña");
      return;
    }
  }
}
alert("No se encontro el usuario");
}

/*funcion crea objeto tipo usuario para*/
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
/*funcion garda en localStorange el parametro recibido tipo objeto*/
function guardarLista(NuevoUsuario) {
  localStorage.setItem('AllUsers', JSON.stringify(NuevoUsuario));
}
/**funcion crea un objeto tipo vendedor*/
function addVededor(pTipoUsuario, pNombre, pEmil, pUsuario, pContrasenna, pTipoServicio, pLong, pLati, pFoto) {
  var nuevoUsuario = {
    tipoUsuario: pTipoUsuario,
    nombre: pNombre,
    email: pEmil,
    usuario: pUsuario,
    contrasenna: pContrasenna,
    tipoServicio: pTipoServicio,
    latitud: pLati,
    longitud: pLong,
    fotoU: pFoto
  };
  Usuarios.push(nuevoUsuario);
  guardarListaVendedor(Usuarios);
}
/*funcion guarda en localStorange un objeto tipo vendedor tipo arreglo*/
function guardarListaVendedor(NuevoUsuario) {
  localStorage.setItem('vendedores', JSON.stringify(NuevoUsuario));
}
/*funcion elimina un vendedor del localStorange*/
function editarVendedor(i) {
  var lcStorange = JSON.parse(localStorage.getItem('vendedores'));
  lcStorange.splice(i, 1);
  localStorage.setItem('vendedores', JSON.stringify(lcStorange));

}
/*funcion elimina un usuario del localStorange*/
function editarNuevoUsuario(i) {
  var lcStorange = JSON.parse(localStorage.getItem('AllUsers'));
  lcStorange.splice(i, 1);
  localStorage.setItem('AllUsers', JSON.stringify(lcStorange));
}
/*funcion verifica que el usuario sea vendedor y si lo es carga la pagina para que agrege un nuevo producto*/
function addProducto(){
  if (usuarioActual.tipoUsuario === "vendedor") {
    window.location = "NuevoProducto.html";
  }else{
    alert("No tienes permisos para esta acción");
  }
}
/*funcion vefica que este un usurio logeado y si lo esta cagar la pagina para cambiar contraseña*/
function olvidoContrasena(){
  if(usuarioActual.tipoUsuario =="" || usuarioActual.tipoUsuario == ""){
    window.location = "CambioContrasenna.html";
  }else{
    alert("Actualmente estas registrado!");
  }
}