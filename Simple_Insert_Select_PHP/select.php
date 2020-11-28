<?php

    //connect to database
    include_once 'connect.php';

    //select all rows from "user"
    $sql="SELECT * FROM user;"; //change "user" to the name of YOUR table!!!

    //drive the query into the connection we have created
    $result = mysqli_query($connection , $sql);

    //simple check
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        echo "<br> USERS IN DATABASE: <br>";
        while($row = mysqli_fetch_assoc($result)){
                echo $row['username'] . "<br>";
         }
    }else {
        echo "Database has no users yet";
    }
?>