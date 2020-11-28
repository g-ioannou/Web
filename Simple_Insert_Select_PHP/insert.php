<?php
   
   //include connection
   include_once 'connect.php';

    //receive variables from html using POST method
    $username = $_POST['username'];
    $password = $_POST['password'];

    if( !empty($username) == TRUE ){
        if( !empty($password) == TRUE){
            $sql = "INSERT INTO user (username , password) VALUES ('$username','$password')"; 
            
            //if the query $sql is successfully queried in the current connection (===TRUE)->execute query
            if( $connection->query($sql) === TRUE) {
                echo "New user added!.<br>";
            }
            else {
                //else show connection error
                echo "Error adding user : ". $connection->error . "<br>";
            }
        }
        else{
            echo "Password cant be void.<br>";
        }
    } else {
        echo "Username can't be void<br>";
    }
?>