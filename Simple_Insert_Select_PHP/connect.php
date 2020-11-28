<?php

    //connect to database using msqli
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName= "testphp";//your dabase name here!!!

    global $connection;
    $connection = mysqli_connect($dbServername , $dbUsername , $dbPassword , $dbName);
    

    if($connection->connect_error){
        die("Connection failed. Error: " . $connection->connect_error);
    }
    echo "Connected successfully to database: " . $dbName . "<br>";

    //$connection->close();         --stops the connection, is executed automatically at the END of the file
?>