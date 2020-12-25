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

//check if a variable has been set or not(not null)
if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];

    echo "Your Name is : ".$name."<br>";
    echo "Your Lastname is : ".$lastname."<br>";
    echo "Your Email is : ".$email."<br>";
}


//Insert Values to database
$sql = "INSERT INTO mytable1 (name, lastname, email) VALUES ('$name', '$lastname', '$email')";
//check the insert
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


//close connection with the database
mysqli_close($conn);

?>