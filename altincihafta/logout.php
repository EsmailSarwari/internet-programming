<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/logout.css">
	<title>logout</title>
</head>
<body>

	<!-- Menu bar -->
	<nav>
		<div class="container">
			<a href="#" class="logo"> My Protfolio</a>
			<ul class="menu">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="login.php">SignUp</a>
				</li>
			</ul>
		</div>
	</nav>

	<!-- page content -->

	<div class="content">
		<h1> Welcom to your account</h1>
		<br>
		<br>
		<br>
		<div class="btn">
			<a href="login.php">Logout</a>
		</div>
	</div>





	<!-- session  -->

<?php
	session_start();

	if (isset($_SESSION['UserName'])){

		session_destroy();

		echo "<script> location.href='index.php'<script/>";
	}
	else{
		echo "<script/> location.href='login.php'";
	}
?>


</body>
</html>




