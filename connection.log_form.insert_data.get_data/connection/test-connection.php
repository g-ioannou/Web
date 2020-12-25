<?php

$host="localhost";
$user="root";
$pass="";
$db="testdb";

$con=mysqli_connect($host, $user, $pass, $db) or die("Connection Failed");
echo "Connection Success";



?>