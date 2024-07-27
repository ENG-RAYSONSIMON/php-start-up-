<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>start up!</title>
</head>

<body>
	<!-- navigation bar -->
	<nav class="navbar navbar-expand-lg navbar-white bg-dark">

		<a class="navbar-brand" href="/"> start up!</a>

		<ul class="navbar-nav ml-auto">
			<?php if (isset($_SESSION['user'])): ?>
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="about.php">About Us</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="logout.php">Log Out!</a>
				</li>
			<?php else: ?>
				<li class="nav-item">
					<a class="nav-link" href="login.php">Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="sign.php">Sign Up!</a>
				</li>
			<?php endif ?>
		</ul>
	</nav>