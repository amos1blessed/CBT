<?php
session_start();
include "connection.php";
if (isset($_SESSION['admin'])) {
	header("location: adminhome.php");
}
if (isset($_POST['password']))  {
	$password = mysqli_real_escape_string($conn , $_POST['password']);
	$adminpass = '$2a$04$j/DxWjHeDFI1tj9GnjMsauGcukYDBLbLOqGoZRqfGeSsciea0zyma';
	if (password_verify($password , $adminpass)) {
		$_SESSION['admin'] = "active";
		header("Location: adminhome.php");
	}
	else {
		echo  "<script> alert('wrong password');</script>";
	}
}


?>



<html>
	<head>
		<title>Knowledge is Wealth</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
		<header>
			<div class="container">
				<h1>Knowledge is Wealth</h1>
				<a href="index.php" class="start">Home</a>

			</div>
		</header>

		<main>
		<div class="container">
				<h2>Enter Password</h2>
				<form method="POST" action="">
				<input type="password" name="password" required="" >
				<input type="submit" name="submit" value="send"> 

			</div>


		</main>

		<footer>
			<div class="container">
			Copyright &copy; Group 7 <br>
				Jignesh (10), Sahil (13), Ashish (16), Bhargav (29), Gaurav(38), Brigesh(70)
			</div>
		</footer>

	</body>
</html>