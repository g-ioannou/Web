<?php
//connection with database
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
    echo "New record created successfully. <br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//get the last inserted record from database

if (mysqli_query($conn, $sql)) {
    //id from last insert
    $last_id = mysqli_insert_id($conn); 
    $sql = "SELECT * FROM mytable1 WHERE ID = '$last_id' ";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)){
        while($row = mysqli_fetch_array($result)){
             // output data with last id from the database
            echo "Id: " . $row["ID"]. " - Name: " . $row["name"]. " - Lastname: " . $row["lastname"]. " - Email: " . $row["email"]. "<br>";
        }
    }
    else{
        echo "0 results";
    }
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//close connection
mysqli_close($conn);


?>