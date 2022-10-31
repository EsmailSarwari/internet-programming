<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/login.css">
	<title>Login</title>
</head>
<body>

	<!-- Menu -->
	<nav>
		<div class="container">
			<a href="index.php" class="logo"> My Protfolio</a>
			<ul class="menu">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="#">SignUp</a>
				</li>
				<li>
					<a href="logout.php">Logout</a>
				</li>
			</ul>
		</div>
	</nav>


	<!-- login Form -->

	<div class="contact">
		<span id="join"></span>
		<h1 class="title">Join Us Here</h1>
		<form id="myform" autocomplete="off" method="post" action="" >
			<div class="element">			
				<input type="text" name="UserName" placeholder="UserName">	
			<div class="element">
			<div class="element">			
				<input type="text" name="Password" placeholder="Password">	
			<div class="element">
				<input type="submit" name="sign in">
			</div>
		</form>
	</div>


	<!-- SESSION -->

	<?php

		$UserName = "admin";
		$Password = "admin";

		session_start();

		if (isset($_POST['UserName'])) {


		if(isset($_POST['UserName']) == $UserName && isset($_POST['Password']) == $Password){
			
			$_SESSION['UserName']=$UserName;

			echo "<script> location.href='index.php'<script/> ";
			
			}else{
				echo "string";
			}
	}
	?>
</body>
</html>

