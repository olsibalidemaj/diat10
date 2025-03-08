<?php

$user = "root";
$pass = "";
$server = "localhost";
$dbname = "db";

try{
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);
}catch(Exepction $e){ 
    echo "Error: " . $e->getMesagge();

}