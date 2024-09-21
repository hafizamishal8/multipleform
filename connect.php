<?php

$host = "localhost";
$mysqlusers = "root";
$password = "";
$dbname = "myproject1";

$conn = mysqli_connect($host,$mysqlusers,$password,$dbname);
if(!$conn){
    echo "connection failed" .mysqli_connect_error();
}
else{
    echo"successfully connect";
}
?>