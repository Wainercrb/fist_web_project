 var productos = [];
 window.addEventListener('load', cargarDatosUsuario, false);
 document.querySelector('#btn-ingresar-navbar').addEventListener('click', Ingresar);
 document.querySelector('#btnCerrarCesion').addEventListener('click', cerrarSesion);
 document.querySelector('#addProduct').addEventListener('click', addProducto);
 document.querySelector('#btnIngresarPerfil').addEventListener('click', verPerfiles);
 document.querySelector('#btnOlvidoContrasena').addEventListener('click', olvidoContrasena);
 document.querySelector('#btnNavBuscar').addEventListener('click', buscar);
document.querySelector('#btnEliminarClienta').addEventListener('click', eliminarCuenta);
 var Usuarios = [];
 var Vendedores = [];
 var editar = false;
 var usuarioActual = {
   nombre: "",
   tipoUsuario: "",
   usuario: ""
 };

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
 /*funcion verifica si hay un usario logeado y si hay carga sus datos a interfaz*/
 function cargarSessionStore() {
   cargarProducosTabla();
   var nombreUsuario = sessionStorage.getItem('loginUsuarios');
   if (nombreUsuario != "") {
     preLoad(nombreUsuario);
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
 /*funcion carga todo los productos del localStorange y los agrega a un lista*/
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
       capturarLoginUsuario(Usuarios[i].usuario);
       window.location = "NuevoProducto.html";
       return;
     }
   }
   alert("No se encontro el usuario");
 }
/*funcion genera automaticamante el  metodo para cargar los productos*/
 function cargarProducosTabla() {
   cargarProductos();
   for (i = 0; i < productos.length; i++) {
     if ('"' + productos[i].vendedor + '"' == sessionStorage.getItem('loginUsuarios')) {
       cargarProductosRegistrados(i, productos[i].nombre, productos[i].descripcion, productos[i].precio, productos[i].categoria, productos[i].subCategoria);
     }
   }

 }
/*funcion crea un producto dinamincamente*/
 function cargarProductosRegistrados(i, nombreProducto, DetallesProducto, PrecioProducto, categoriaProducto, subCategoriaProduct) {
   $("#content").append("<div id='wainerdiv' class='col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe'><img src='img/productSerach.png' alt='' class='img-responsive rounded'/><label>Nombre: " + nombreProducto + ", Precio: " + PrecioProducto + "</label><div><label class='wainerrb'>Categoria: " + categoriaProducto + ", sub-categoria: " + subCategoriaProduct + "</label></div><div><label>" + DetallesProducto + "</label></div><button class='btn btn-primary btn-block btn-sm' value='" + i + "' onclick='VerProducto(this.value)'>Editar</button><button class='btn btn-primary btn-block btn-sm' value='" + i + "' onclick='eliminarProducto(this.value)'>Eliminar</button><button class='btn btn-primary btn-block btn-sm' value='" + i + "' onclick='VerDetallesProducto(this.value)'>Ver</button><div><label><br></label></div></div>");
 }
 /*funcion gurda la posicion del producto en session Storange para cargar la pagina y poder ver mis productos*/
 function VerDetallesProducto(id) {
   sessionStorage.setItem('verProducto', id);
   window.location = "DetallesArticulo.html";
 }

 function VerProducto(id) {
   sessionStorage.setItem('verProducto', id);
   window.location = "NuevoProducto.html";
 }

 function eliminarProducto(id) {
   var x = id;
   var lcStorange = JSON.parse(localStorage.getItem('Producto'));
   lcStorange.splice(x, 1);
   localStorage.setItem('Producto', JSON.stringify(lcStorange));
   sessionStorage.setItem('verProducto', '-1');
   window.location = "MisProductos.html";
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

/*funcion elimina el sessionStorange y carga la pagina principal*/
function cerrarSesion(){
sessionStorage.clear();
window.location = "index.html";
return;
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
  alert("Actualmente estas registrado");
}
}
/*Funcion guarda un un valor en sessionStorange para cargar la pagina de buscar y cargar ese elemento*/
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
/*funcion carga la pagina del perfil dependiendo del usuario*/
function verPerfiles(){
if(usuarioActual.tipoUsuario == "comprador"){
  window.location ="VerPerfil.html";
}else if(usuarioActual.tipoUsuario == "vendedor"){
  window.location = "VerPerfilEmpresa.html";
}else{
  alert("No puedes acceder a esta información por que no estas registrado");
}
}
function eliminarCuenta() {
    var lcStorange = JSON.parse(localStorage.getItem('vendedores'));
    lcStorange.splice(parseInt(sessionStorage.getItem("posicion")), 1);
    localStorage.setItem('vendedores', JSON.stringify(lcStorange));
    window.location = "index.html";
}