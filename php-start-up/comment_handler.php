<?php

       include "config/database.php";

// form data
$department = $_POST['department'];
$comment = $_POST['comment'];

// save form data
$sql = "INSERT INTO comments (department, comment) VALUES('$department', '$comment')";

$result = $conn -> execute_query($sql);

if($result) {
    header('location:home.php');
    exit;
} else {
    header('location:comment.php');
    exit;
}