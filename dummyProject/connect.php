<?php
    //CONNECTING TO A DATABASE CALLED dummydb
    $hostname = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "dummydb";


    //create connection
    global $conn = new mysqli($hostname, $dbusername, $dbpassword, $dbname);
?>