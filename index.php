<!-- Michael Duisenberg -->
<!-- CST-126 -->
<!-- 10-15-20 -->
<!-- Welcome page for blog. This page serves as a home page to access the other starting pages.  -->
<!-- Version 3.0 -->

<!DOCTYPE html>
<html>
	<head>
	<link rel="icon" href="letter-b-64v-prints.png">
	<title>  Welcome to my blog </title>
	<link rel="stylesheet" href="welcomeStyle.css">
	<style>
		/* centers output on screen */
				.middle p{
					height: 6em;
					position: relative;
					margin: 0;
					position: absolute;
					top: 50%;
					left: 50%;
					margin-right: -50%;
					transform: translate(-50%, -50%);
					text-align: center;
					background-color:grey;
					width:400px;
					border:1px solid black;
				}
		</style>
	
	
		
	<meta charset="ISO-8859-1">

	</head>
	<body>
		
		<h1> Crazy Car Stories</h1>
		
		<div class="topnav">
		<a class="active" href="index.php">Home</a>
		<a href="userRegister.php">Register</a>
		<a href= "userLogin.php">Login</a>
		</div>
		
		<div class="middle">
		
		<p>We all drive, but sometimes driving can get a little crazy<br>
			This Blog is pretty much twitter, but just for those crazy times<br>
			you wanted to drive someone off a cliff.
		</p>
		</div>
		
		
		<p><?php include 'footer.php' ?> </p>
		
		
	</body>
</html>