<?php

$host="localhost:8081";
$user="root";
$pass="";
$db="restaurant";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}



?>