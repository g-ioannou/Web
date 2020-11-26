<?php

    

     //GETTING THE VARIABLES FROM main.html USING POST METHOD
     $username = filter_input(INPUT_POST, 'username');
     $password = filter_input(INPUT_POST, 'password');
     
     echo "username:" . $username . "\n";
     if(!empty($username)){ //IF THE USER ENTERS A NON-EMPTY STRING
        if(!empty($password)){ //DO THE SAME FOR THE PASSWORD

            //CONNECTING TO A DATABASE CALLED dummydb
            $hostname = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "dummydb";


            //create connection
            $conn = new mysqli($hostname, $dbusername, $dbpassword, $dbname);
           

            //check connection
            if ($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);
            }
            else {
               
                //SQL QUERY - INSERT INTO TABLE USER 
                $sql = "INSERT INTO user (username , password) VALUES ('$username','$password')";

                //CHECK IF THE VALUES ARE INSERTED CORRECTLY
                if($conn->query($sql)){
                    echo ("New user added");
                }
                else {
                    echo "Error: ". $sql . "<br>". $conn->error;
                }

            }

        }
        else {
            echo("Password should not be empty.\n");
            die();
        }
     }
     else { //IF NOT
         echo("Username should not be empty.\n");
         die();
     }
?>