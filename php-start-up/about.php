<?php
session_start();
include "inc/header.php";

if (!isset($_SESSION['user'])) {
    header('location: login.php');
    exit;
}

$firstname = $_SESSION['user'];
// $user_id = $_SESSION['id'];

?>

<div class="container">
    <h3> Welcome <?= ucwords($firstname)?> </h3>
    <!-- <h3> The user id is: <?= $user_id ?> </h3> -->
    <h1>About Us</h1>
    <h6>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae asperiores, aspernatur<br>
        ab alias, excepturi reprehenderit cupiditate voluptate aliquid possimus nobis quasi and <br>
        necessitatibus maiores illo, repudiandae ex laboriosam dicta voluptates neque. ashdn tyu <br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae asperiores, aspernatur<br>
        ######################################################################################## <br>
        <br>

        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae asperiores, aspernatur<br>
        ab alias, excepturi reprehenderit cupiditate voluptate aliquid possimus nobis quasi and <br>
        necessitatibus maiores illo, repudiandae ex laboriosam dicta voluptates neque. ashdn tyu <br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae asperiores, aspernatur<br>
        ######################################################################################## <br>
        <br>


        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae asperiores, aspernatur<br>
        ab alias, excepturi reprehenderit cupiditate voluptate aliquid possimus nobis quasi and <br>
        necessitatibus maiores illo, repudiandae ex laboriosam dicta voluptates neque. ashdn tyu <br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae asperiores, aspernatur<br>
        ######################################################################################## <br>

    </h6>
</div>