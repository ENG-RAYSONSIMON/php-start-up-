<?php
include "config/database.php";

// form data 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

// save form data
$query = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname','$lastname','$email','$password1')";

$result = $conn->execute_query($query);

if ($result) {
    header('location:login.php');
    exit;
    
} else {
    header('location:sign.php');
    exit;
}

