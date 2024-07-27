<?php

// connecting database
$conn = new mysqli('localhost', 'rayson', '123456', 'start_up_php');

// check connection
if ($conn->connect_error) {
    die('connection failed' . $conn->connect_error);
}
