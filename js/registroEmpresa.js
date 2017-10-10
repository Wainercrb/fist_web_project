with(document.registroUsuario){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && image.value == ""){
			ok=false;
			alert("Debe seleccionar una foto de perfil");
			txtConfPass.focus();
		}
		if(ok && txtName.value==""){
			ok=false;
			alert("Debe escribir su nombre");
			txtName.focus();
		}
		if(ok && txtEmail.value==""){
			ok=false;
			alert("Debe escribir su email");
			txtEmail.focus();
		}
		if(ok && txtTel.value==""){
			ok=false;
			alert("Debe escribir su teléfono");
			txtEmail.focus();
		}
		if(ok && txtTr.value==""){
			ok=false;
			alert("Debe escribir su tarifa de apartado");
			txtEmail.focus();
		}
		if(ok && txtUser.value==""){
			ok=false;
			alert("Debe escribir su usuario");
			txtUser.focus();
		}
		if(ok && txtPass.value==""){
			ok=false;
			alert("Debe escribir su password");
			txtPass.focus();
		}
		if(ok && txtConfPass.value==""){
			ok=false;
			alert("Debe escribir su confirmacion de password");
			txtConfPass.focus();
		}
		if(ok && image1.value==""){
			ok=false;
			alert("Debe agregar la imagen uno de su local");
			image1.focus();
		}
		if(ok && image2.value==""){
			ok=false;
			alert("Debe agregar la imagen dos de su local");
			image2.focus();
		}
		if(ok && imgPro3.value==""){
			ok=false;
			alert("Debe agregar la imagen tres de su local");
			image3.focus();
		}
		if(ok && txtLatitud.value==""){
			ok=false;
			alert("Debe agregar su ubicación");
			txtUser.focus();
		}
		if(ok && txtLongitud.value==""){
			ok=false;
			alert("Debe agregar su ubicación");
			txtUser.focus();
		}
		if(ok && txtPass.value!= txtConfPass.value){
			ok=false;
			alert("Los passwords no coinciden");
			txtConfPass.focus();
		}
		if(ok){ submit(); }
	}
}
$(".glyphicon-eye-open").mousedown(function(){
    $("#txtPass").attr('type','text');
}).mouseup(function(){
    $("#txtṔass").attr('type','password');
}).mouseout(function(){
    $("#txtPass").attr('type','password');
});
$(".glyphicon-eye-open").mousedown(function(){
    $("#txtConfPass").attr('type','text');
}).mouseup(function(){
    $("#txtConfPass").attr('type','password');
}).mouseout(function(){
    $("#txtConfPass").attr('type','password');
});
document.querySelector('#blah').addEventListener('click', fotoPerfil);
function fotoPerfil() {
    var obj = document.getElementById("image");
    if (obj) {
        obj.click();
    }
}
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('blah').src = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
    }
}
document.querySelector('#imgPro1').addEventListener('click', fotoPerfil1);
function fotoPerfil1() {
    var obj = document.getElementById("image1");
    if (obj) {
        obj.click();
    }
}
function readURLF1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imgPro1').src = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
    }
}
document.querySelector('#imgPro2').addEventListener('click', fotoPerfil2);
function fotoPerfil2() {
    var obj = document.getElementById("image2");
    if (obj) {
        obj.click();
    }
}
function readURLF2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imgPro2').src = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
    }
}
document.querySelector('#imgPro3').addEventListener('click', fotoPerfil3);
function fotoPerfil3() {
    var obj = document.getElementById("image3");
    if (obj) {
        obj.click();
    }
}
function readURLF3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('imgPro3').src = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
    }
}






