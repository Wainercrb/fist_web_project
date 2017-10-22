<script>
    var latitud;
    var longitud;
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else {
            alert("Este navegador no soporta google maps");
        }
    }
    function showPosition(position) {
        var latlon = position.coords.latitude + "," + position.coords.longitude;
        latitud = parseFloat(sessionStorage.getItem(position.coords.latitude));
        longitud = parseFloat(sessionStorage.getItem(position.coords.longitude));
        initMap(position.coords.latitude,position.coords.longitude);
        document.getElementById("txtLatitud").value = position.coords.latitude;
        document.getElementById("txtLongitud").value = position.coords.longitude;
    }
//To use this code on your website, get a free API key from Google.
//Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
        alert("User denied the request for Geolocation.");
        break;
        case error.POSITION_UNAVAILABLE:
        alert("Location information is unavailable.");
        break;
        case error.TIMEOUT:
        alert("The request to get user location timed out.");
        break;
        case error.UNKNOWN_ERROR:
        alert("An unknown error occurred.")
        break;
    }
}
function initMap(a, b) {
    var uluru = {lat: a, lng: b};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}
if('<?php echo $_GET["edit"]; ?>' === 'true'){
    window.onload=function() {
        cargarDbMapa();
        $("#image").val($("#blah").val());
        $('#image').files[0] = '<?php echo base64_encode($foto)?>';
    }
    var ltt =  parseFloat('<?php echo $latitud; ?>');
    var lgg =  parseFloat('<?php echo $longitud; ?>');
    function cargarDbMapa() {
        var myLatLng = {lat: ltt, lng: lgg };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 14,
            center: myLatLng
        });
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Ubicación'
        });
    }
}
</script>