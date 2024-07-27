<?php

session_start();
include 'inc/header.php';

if (!isset($_SESSION['user'])) {
    header('location: login.php');
    exit;
}

$firstname = $_SESSION['user'];

?>

<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
           
            <h3>Welcome <?= ucwords($firstname) ?> </h3>
            <h2>Comment On Your Respective Department.</h2>

            <form action="comment_handler.php" method="POST">

                <label>which department are you in?</label>
                <input type="text" class="form-control"  placeholder="please write name of your department.  Example: CCT " name="department" required><br>

                <label>provide your comment:</label>
                <textarea class="form-control form-control-md textarea" placeholder="my comment..." name="comment" required></textarea>
                <div class="save">
                    <button type="submit" class="btn btn-lg btn-success">save</button>
                </div>

            </form>

        </div>
        <div class="col-lg-2"></div> 
    </div>
</div>