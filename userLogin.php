<!-- Michael Duisenberg -->
<!-- CST-126 -->
<!-- 09-18-20 -->
<!-- This page is the form for loging in users -->
<!-- Version 2.0 -->


<!DOCTYPE html>
<html>
	<head>
	<link rel="icon" href="letter-b-64v-prints.png">
	<link rel="stylesheet" href="welcomeStyle.css">		
	<style>
		form{
			height: 5em;
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
	<title>Login Form</title>

	</head>
	<body>
		<h1>Login Page</h1>
		<div class="topnav">
		<a href="index.php">Home</a>
		<a href="userRegister.php">Register</a>
		<a class="active" href= "userLogin.php">Login</a>
		</div>
		
		<form action="userLoginHandler.php" method="post">
		<!-- The required statements make sure that all data fields are entered when the user clicks login, if they are not, a message pops up,
	 stating that a required field is missing -->
	 <!-- 'placeholder' statement fills in the form with greyed-out text in the background of the form, letting the user know what to put there -->
			<input type="text" name="userName" placeholder="Username" required/><br/>
			<input type="password" name="passWord" placeholder="Password" required/><br/>
				<input type="submit" value="Login"/>
		</form>

		
	<p><?php include 'footer.php' ?> </p>
	</body>
</html>