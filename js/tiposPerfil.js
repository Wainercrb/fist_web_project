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
window.location = "TiposPerfil.html";
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
window.location = "TiposPerfil.html";
return;
}
}
alert("No se encontro el usuario");
}
/*funcion carga verifica si hay un usurrio en el local storange y si hay carga sus datos*/
function cargarSessionStore() {
var nombreUsuario = sessionStorage.getItem('loginUsuarios');
if (nombreUsuario != "") {
preLoad(nombreUsuario);
}
}
function eliminarCookie(name) {
document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
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
/*funcion elimina mi perfil del localStorange*/
function eliminarCuenta() {
var lcStorange = JSON.parse(localStorage.getItem('vendedores'));
lcStorange.splice(parseInt(sessionStorage.getItem("posicion")), 1);
localStorage.setItem('vendedores', JSON.stringify(lcStorange));
window.location = "index.html";
}