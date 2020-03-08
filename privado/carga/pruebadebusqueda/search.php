<?php
$servername = "localhost";
$username = "php_parque";
$password = "AutoParque.1920";
$dbname = "php_parque";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
} 
$id = $_GET['q'];
$sql = "SELECT * FROM automotor WHERE patente LIKE '%".$id."%' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
 echo $row["patente"]. "\n";
 }
} else {
 echo "0 results";
}
$conn->close();
?>