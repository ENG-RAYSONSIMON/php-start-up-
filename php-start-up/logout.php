<?php
session_start();

unset($_SESSION['user']);
unset($_SESSION['id']);

session_destroy();

header('location: login.php');
exit;