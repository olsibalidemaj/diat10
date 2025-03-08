<?php

include_once 'config.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];


if(isset($_POST['submit'])){

    $sql = "INSERT INTO users(name, surname, email) VALUE (:name, :surname, :email)";

    $sqlQuery = $conn->prepare($sql);

    $sqlQuery->bindParam(":name", $name);
    $sqlQuery->bindParam(":surname", $surname);
    $sqlQuery->bindParam(":email", $email);

    $sqlQuery->execute();

    echo "Data saved successfully  <br>"; 



}