<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = "mini_ecommerce";

$conn = new mysqli ($host, $user, $password, $db);
if($conn->error){
    echo "DB not connect. Error : " . $conn->error;
}
?>