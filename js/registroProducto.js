with(document.registroProducto){
    onsubmit = function(e){
        e.preventDefault();
        ok = true;

        if(ok && txtCode.value==""){
            ok=false;
            alert("Debe escribir el codigo del producto");
            txtCode.focus();
        }
        if(ok && txtName.value==""){
            ok=false;
            alert("Debe escribir el nombre del producto");
            txtName.focus();
        }
        if(ok && txtBrand.value==""){
            ok=false;
            alert("Debe escribir la marca del producto");
            txtBrand.focus();
        }
        if(ok && txtPrice.value<0){
            ok=false;
            alert("Debe escribir el precio del producto que sea mayor a cero");
            txtPrice.focus();
        }
        if(ok && txtQuantity.value==""){
            ok=false;
            alert("Debe escribir la contidad del producto que sea mayor a cero");
            txtQuantity.focus();
        }
        if(ok && txtDescription.value==""){
            ok=false;
            alert("Agrege una pequeña descripción del producto");
            txtDescription.focus();
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
        if(ok){ submit(); }
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






