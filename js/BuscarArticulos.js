   var productos = [];
   window.addEventListener('load', cargarDatosUsuario, false);
   document.querySelector('#btn-ingresar-navbar').addEventListener('click', Ingresar);
   document.querySelector('#btnNavBuscar').addEventListener('click', buscar);
   document.querySelector('#btnCerrarCesion').addEventListener('click', cerrarSesion);
   document.querySelector('#addProduct').addEventListener('click', addProducto);
   document.querySelector('#btnIngresarPerfil').addEventListener('click', verPerfiles);
   document.querySelector('#btnOlvidoContrasena').addEventListener('click', olvidoContrasena);
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
   /*función carga verifica si hay un usurio registrado y si hay  carga sus datos para mostrarlos en interfaz*/
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
   /*funcion carga los productos y los agrega a una lista tipo producto*/
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
         window.location = "BuscarArticulo.html";
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
         window.location = "BuscarArticulo.html";
         return;
       }
     }
     alert("No se encontro el usuario");
   }
   /*funcion hace el fildrado de busqueda validando diferentes casos*/
   function cargarProducosTabla() {    
    if(sessionStorage.getItem('categoria') != null){
      buscarIndex("selectCategoriaBuscar", sessionStorage.getItem('categoria'));
    } if (sessionStorage.getItem('distancia') != null) {
     buscarIndex("selectDistancia", ""+sessionStorage.getItem('distancia')+"km");
   };
   cargarProductos();
   for (i = 0; i < productos.length; i++) {
    getUbicacionVendedor(productos[i].vendedor);
    if(usuarioActual.usuario === null || usuarioActual.usuario === "" || usuarioActual.usuario === "undefined"){
      distancia = "error, debes estar registrado";
    }else{
      getDistanceFromLatLonInKm(vLatitud, vLongitud, usuarioActual.latitud, usuarioActual.longitud);
    }
    if(sessionStorage.getItem('valorBuscar') == "-"){
      if (productos[i].categoria == sessionStorage.getItem('categoria') && distancia <= parseInt(sessionStorage.getItem('distancia')) ) {
       cargarProductosRegistrados(i, productos[i].nombre, productos[i].descripcion, productos[i].precio, productos[i].categoria, productos[i].subCategoria);
     }else if (parseInt(sessionStorage.getItem('distancia')) == 60 && sessionStorage.getItem('categoria') == "Todas") {
      cargarProductosRegistrados(i, productos[i].nombre, productos[i].descripcion, productos[i].precio, productos[i].categoria, productos[i].subCategoria);
    }else if (distancia <= parseInt(sessionStorage.getItem('distancia')) && sessionStorage.getItem('categoria') == "Todas") {
      cargarProductosRegistrados(i, productos[i].nombre, productos[i].descripcion, productos[i].precio, productos[i].categoria, productos[i].subCategoria);
    }else if (parseInt(sessionStorage.getItem('distancia')) == 60  &&  productos[i].categoria == sessionStorage.getItem('categoria')) {
     cargarProductosRegistrados(i, productos[i].nombre, productos[i].descripcion, productos[i].precio, productos[i].categoria, productos[i].subCategoria);
   }
 }
 else if(distancia <= parseInt(sessionStorage.getItem('distancia')) && sessionStorage.getItem('categoria') == productos[i].categoria && productos[i].nombre == sessionStorage.getItem('valorBuscar')){
  cargarProductosRegistrados(i, productos[i].nombre, productos[i].descripcion, productos[i].precio, productos[i].categoria, productos[i].subCategoria);
}
} 
if(parseInt(sessionStorage.getItem('distancia')) == 60 ){
  document.getElementById("hResultado").innerHTML = "Resultados para:  '"+ sessionStorage.getItem('valorBuscar')+"', categoria : "+sessionStorage.getItem('categoria')+" alrededor de: " + parseInt(sessionStorage.getItem('distancia')) + " km en adelante";
}else{
  document.getElementById("hResultado").innerHTML = "Resultados para:  '"+ sessionStorage.getItem('valorBuscar')+"', categoria : "+sessionStorage.getItem('categoria')+" alrededor de: " + parseInt(sessionStorage.getItem('distancia')) + " km";
}
}
/*funcion crea los elemtos dinamicamente  para mostrar los necesario cuando se hace una busqueda*/
function cargarProductosRegistrados(i, nombreProducto, DetallesProducto, PrecioProducto, categoriaProducto, subCategoriaProduct) {
 $("#appendConteint").append("<div class='col-sm-4 col-lg-3 col-md-4'><div class='thumbnail'><img src='http://www.buylevard.com/img/su/545-large.jpg'><div class='caption' ><h4 class='pull-right'>" + PrecioProducto + "</h4><h4><a href=''>" + nombreProducto + "</a></h4><p>Distancia aproximada: " + distancia + " km</p><button class='btn btn-primary'  value='" + i + "' onclick='VerDetallesProducto(this.value)'>ver</button></div></div></div>");
}
/*funcin obtinen un aproximado de distancia de dos puntos de latitud y longitud*/
function getDistanceFromLatLonInKm(lat1,lon1,lat2,lon2) {
  var R = 6371; // Radius of the earth in km
  var dLat = deg2rad(lat2-lat1);  // deg2rad below
  var dLon = deg2rad(lon2-lon1); 
  var a = 
  Math.sin(dLat/2) * Math.sin(dLat/2) +
  Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * 
  Math.sin(dLon/2) * Math.sin(dLon/2)
  ; 
  var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
  var d = R * c; // Distance in km
  
  distancia = d;
  distancia = distancia.toFixed(2);
  return d;
}
 /*funcion carga un producto seleccionado desde interfaz para ver sus detalles*/
 function VerDetallesProducto(id) {
       sessionStorage.setItem('verProducto2', id);
       window.location = "DetallesArticuloCompra.html";
   }
function deg2rad(deg) {
  return deg * (Math.PI/180)
}
function getUbicacionVendedor(pVendedor) {
 var temVendedores = [];
 var listaVededores = localStorage.getItem('vendedores');
 if (listaVededores != null) {
   temVendedores = JSON.parse(listaVededores);
   for (var i = 0; i < temVendedores.length; i++) {
    if (temVendedores[i].usuario == pVendedor) {
      vLatitud = temVendedores[i].latitud;
      vLongitud= temVendedores[i].longitud;
    }
  }
}
}
/*funcion elimina un cookie por su nombre*/
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
/*función busca un elemto guardanto los datos en session Storange y cargando la pagina de busqueda*/
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
/*seleciona y activa un select, conforme al dato que indresa por parametro*/
function buscarIndex(lmnt, etxt){
  var x = document.getElementById(lmnt);

  for(var i=0; i < x.options.length; i++)
  {
   if (x.options[i].text === etxt){
    x.options[i].selected = true
  }
}
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