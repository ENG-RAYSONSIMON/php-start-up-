<?php

session_start();

include "config/database.php";

$email = $_POST['email'];
$password = $_POST['password'];

// retrive login data
$query = "SELECT * FROM users WHERE email = '$email' ";
$result = $conn->execute_query($query);

$user = $result->fetch_assoc();

if ($user) {

    if ($password === $user['password']) {
                //    Session Insertion
        $_SESSION['user'] = $user['firstname'];
        $_SESSION['id'] = $user['id'];

        header('location:comment.php');
        exit;

    } else {
        echo 'Invalid email or password.';
    }

} else {

    echo 'User does not exist';
}



