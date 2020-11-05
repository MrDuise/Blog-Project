<!-- Michael Duisenberg -->
<!-- CST-126-->
<!-- 09-12-20-->
<!-- This page handles the form gathering and inserts the data in the database-->
<!-- Version 2.0 -->

<!-- html was used around the PHP code in order to add CSS styling. -->
<html>
	<head>
		<title> Registration Complete</title>
		<link rel="icon" href="letter-b-64v-prints.png">
		<link rel="stylesheet" href="welcomeStyle.css">	
		<style>
		/* centers output on screen */
				p{
					height: 6em;
					position: relative;
					margin: 0;
					position: absolute;
					top: 50%;
					left: 50%;
					margin-right: -50%;
					transform: translate(-50%, -50%);
					text-align: center;
					background-color:#8BD5EF;
					width:400px;
					border:1px solid black;
				}
				
				body{
				background-color: grey;
				}
		
		</style>
		
	</head>
	<body>
	
		<div class="topnav">
		<a href="userRegister.php">Register</a>
		<a href= "userLogin.php">Login</a>
		</div>
		<p>
		<?php
		
			
		?>
		
			<?php
			require_once 'myfuncs.php';
			
			
			//variables are set to the value of the data entered in the form if the connection to the database is made
			if(dbConnect())
			{
			    $personFirst = addslashes($_POST["firstName"]);
			    $personLast = addslashes($_POST["lastName"]);
			    $userName = $_POST["userName"];
			    $email = $_POST["email"];
			    $passWord = $_POST["passWord"];
			    $role = "user";
			}
					
					//if the username chosen is already taken, prompt the user to enter a different one
					$sql_user = "SELECT * FROM users WHERE User_Name = '$userName'";
					//$sql_pass = "SELECT * FROM users WHERE Password = '$passWord'";
					$result_u = mysqli_query(dbConnect(), $sql_user);
					//$result_p = mysqli_query($conn, $sql_pass);
					
					
					//checks if the username and password combo already is in the database, if it is, outputs a warning
					//if not, inputs the data into the table and informs the user that they are now registered
					if (mysqli_num_rows($result_u) > 0) {
					    echo "Sorry... username already taken";
					}//else if(mysqli_num_rows($result_p) > 0){
					    //echo "Sorry... password already taken";
					//}
					else{
					    $sql = "INSERT INTO `users` (`User_Name`, `First_Name`, `Last_Name`, `Email`, `Password`, `role`) VALUES ('$userName', '$personFirst','$personLast', '$email', '$passWord', '$role')";
					    if (mysqli_query(dbConnect(), $sql)) {
					        echo "Welcome to the Blog of". "<br>";
					        echo "crazy car stories.". "<br>";
					        echo "You can either Login or". "<br>";
					        echo "register a new user.". "<br>";
					    } else {
					        echo "Error: " . $sql . "<br>" . mysqli_error(dbConnect());
					    }
					    exit();
					}

				
					?>
			</p>
			<p><?php include 'footer.php' ?> </p>
	</body>
</html>
