<?php

$host="localhost";
$user="root";
$pass="";
$db="test_in_db";

$conn =mysqli_connect($host, $user, $pass, $db);

// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "INSERT INTO mytable1 (name, lastname, email) VALUES ('Test', 'Testing', 'Test@testing.com')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>