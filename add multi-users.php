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

$sql = "INSERT INTO pbxusers (name, phone, email)
VALUES ('maro', '35991421', 'maro@example.com');";
$sql .= "INSERT INTO pbxusers (name, phone, email)
VALUES ('slim', '74871325', 'slim@example.com');";
$sql .= "INSERT INTO pbxusers (name, phone, email)
VALUES ('amani', '539872212', 'amani@example.com')";

if ($conn->multi_query($sql) === TRUE) {
  echo "new data add";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
----------------------------------- check php ----------------------------------------------------

select * from pbxusers;
+----+------------+-----------+-------------------+---------------------+
| id | name       | phone     | email             | reg_date            |
+----+------------+-----------+-------------------+---------------------+
|  1 | mohamedali |  23779194 | ali@gmail.com     | 2020-10-28 13:36:37 |
|  2 | maro       |  35991421 | maro@example.com  | 2020-10-28 13:45:36 |
|  3 | slim       |  74871325 | slim@example.com  | 2020-10-28 13:45:36 |
|  4 | amani      | 539872212 | amani@example.com | 2020-10-28 13:45:36 |
+----+------------+-----------+-------------------+---------------------+
4 rows in set (0.00 sec)

