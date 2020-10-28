<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pbx";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, phone FROM pbxusers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. "<br> name: ". $row["name"]. "<br> phone: " . $row["phone"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>



</body>
</html>

----------------- check --------------

http://192.168.1.212/php/select-item.php

click file select item

************************

id: 1
name: mohamedali
phone: 23779194

id: 2
name: maro
phone: 35991421

id: 3
name: slim
phone: 74871325

id: 4
name: amani
phone: 539872212
***************************

