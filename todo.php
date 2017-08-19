<?php
$servername = "localhost";
$username = "root";
$password = "Mysql3.14159265";
$dbname = "quarto_titio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT atividade FROM todo";
$result = $conn->query($sql);

echo "<h3 align='center'>To Do</h3>";

echo "<ul>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["atividade"]. "</li>";
    }
} else {
    echo "<li>Arranjar o que fazer!</li>";
}

echo "</ul>";



$conn->close();
?>