<!-- Michael Duisenberg -->
<!-- CST-126 -->
<!-- 09-27-20 -->
<!-- This page is the form for registering new users -->
<!-- Version 2.0 -->

<!DOCTYPE html>
<html>
	<head>
	<title>Registration Form</title>
	<link rel="icon" href="letter-b-64v-prints.png">
	<!-- style format centers form in the center of the screen, also adds a border -->
	<link rel="stylesheet" href="welcomeStyle.css">	
	
	<style>
	form{
			height: 10em;
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

<!-- body section creates the form to get the users information -->
	<body>
	
	<h1>Register Page</h1>
		<div class="topnav">
		<a href="index.php">Home</a>
		<a class="active" href="userRegister.php">Register</a>
		<a href= "userLogin.php">Login</a>
		</div>
	<!-- The required statements make sure that all data fields are entered when the user clicks submit, if they are not, a message pops up,
	 stating that a required field is missing -->
		<form action="userRegisterHandler.php" method="post"> 
		<input type="text" name="userName" placeholder="Username" required/><br/>
		<input type="text" name="firstName" placeholder="First Name" required/><br/>
		<input type="text" name="lastName" placeholder="Last Name" required/><br/>
		<input type="email" name="email" placeholder="Email" required/><br/>
		<input type="password" name="passWord" placeholder="Password" required/><br/>
				<input type="submit" value="Register"/>
		</form>
	<p><?php include 'footer.php' ?> </p>
	</body>
</html>
