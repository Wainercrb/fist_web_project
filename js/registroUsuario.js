document.querySelector('#blah').addEventListener('click', fotoPerfil);
function fotoPerfil() {
    var obj = document.getElementById("image");
    if (obj) {
        obj.click();
    }
}
function readURL(input) {
    if (input.files && input.files[0]) {
    	alert(input.files[0].src);
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('blah').src = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
    }
}
with(document.registroUsuario){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && image.files == ""){
			ok=false;
			alert("Debe seleccionar una foto de perfil");
			txtConfPass.focus();
		}
		if(ok && txtName.value==""){
			ok=false;
			alert("Debe escribir su nombre");
			txtName.focus();
		}
		if(ok && txtSurnameOne.value==""){
			ok=false;
			alert("Debe escribir su apellido paterno");
			txtSurnameOne.focus();
		}
		if(ok && txtSurnameTwo.value==""){
			ok=false;
			alert("Debe escribir su apellido materno");
			txtSurnameTwo.focus();
		}
		if(ok && txtEmail.value==""){
			ok=false;
			alert("Debe escribir su email");
			txtEmail.focus();
		}
		if(ok && txtAge.value==""){
			ok=false;
			alert("Debe escribir su edad");
			txtAge.focus();
		}
		if(ok && txtUser.value==""){
			ok=false;
			alert("Debe escribir su usuario");
			txtUser.focus();
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
