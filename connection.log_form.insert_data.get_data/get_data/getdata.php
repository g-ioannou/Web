<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_in_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM mytable1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["ID"]. " - Name: " . $row["name"]. " - Lastname " . $row["lastname"]." - Email " . $row["email"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>