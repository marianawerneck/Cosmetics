<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cosmetics";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>

<html>
<h3>RESULTADOS</h3>

<?php 
$name = $_GET['name'];
$sql = "SELECT name, link FROM products WHERE name like '%$name%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name::: " . $row["name"]. " link::: " . $row["link"]. "<br>";
    }
} else {
    echo "0 results";
}
?>


</html>