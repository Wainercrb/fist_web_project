<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "utn_tienda";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM usuario";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo '<img src="data:image/jpeg;base64,'.base64_encode($row["foto"]).'"/>';

?>




<?php
}
$conn->close();
}
?>