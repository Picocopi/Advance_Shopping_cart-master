<?php

$sname = "localhost";
$uname = "root";
$password = "";
$dbName = "Productdb";

$conn = mysqli_connect($sname,$uname,$password,$dbName);

if(!$conn){
    echo "Connection failed!";
}


?>