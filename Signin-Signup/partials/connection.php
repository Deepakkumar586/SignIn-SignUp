<?php

$server = "localhost";
$username = "root";
$password = "deepak";
$database = "chatroom";

$conn = mysqli_connect($server, $username,$password,$database);

if($conn){
    echo "Success";
 }
else{
    die("error");
}
?>