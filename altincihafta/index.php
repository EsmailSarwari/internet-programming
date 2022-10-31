<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/Style.css">
	<title>Php Project</title>
</head>
<body>

	<!-- Menu bar -->
	<nav>
		<div class="container">
			<a href="#" class="logo"> My Protfolio</a>
			<ul class="menu">
				<li>
					<a href="#">Home</a>
				</li>
				<li>
					<a href="login.php">SignUp</a>
				</li>
				<li>
					<a href="logout.php">Logout</a>
				</li>
			</ul>
		</div>
	</nav>

	<!-- Home -->
 
	<div class="home-container">
		<div class="home-text">
			<h1>Hi,</h1>
			<h1>I'am <span id="name">Esmail</span> </h1>
			<h1>Join Our FullStack Developer Community</h1>
			<div class="my-btn">
				<a href="login.php" class="btn">Join</a>			
			</div>
		</div>
		<div class="home-image">
			<img src="images/1.png">
		</div>
	</div>
	<br>

	<!-- Contact -->

	<div class="contact">
		<span id="join"></span>
		<h1 class="title">Send Us FeedBack</h1>
		<form id="myform" autocomplete="off">
			<div class="element">			
				<input type="text" name="name" placeholder="Name">	
			<div class="element">			 
				<input type="email" name="email" placeholder="Email">
			</div>
			<div class="element">			
				<input type="number" name="number" placeholder="Number">
			</div>
			<div class="element">	
				<label>Write Your Massage</label>		
				<textarea class="msg"  rows="6">
					 
				</textarea>
			</div>
			<div class="element">
				<button type="submit">Submit</button>
			</div>
		</form>
	</div>

</body>
</html>