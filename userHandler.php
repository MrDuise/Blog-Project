//Michael Duisenberg
//CST-126
//09-12-20
//This page handles the form gathering and inserts the data in the database

//html was used around the PHP code in order to add CSS styling. 
<html>
	<head>
		<title> Registration Complete</title>
		<style>
		/* centers output on screen */
				p{
					height: 10em;
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
		<p>
		<?php
		//variables are set to the value of the data entered in the form
			$personFirst = addslashes($_POST["firstName"]);
			$personLast = addslashes($_POST["lastName"]);
			$userName = $_POST["userName"];
			$email = $_POST["email"];
			$passWord = $_POST["passWord"];
		?>
			
			<?php echo "You are now registered."; ?> <br>
			<?php echo "First Name is " . $personFirst;?> <br>
			<?php echo "Last Name is " . $personLast;?> <br>


			<?php
				$host = "localhost";
				$username = "root";
				$password = "root";
				$database_name = "registration";
				$port = 8889;


				// Create connection to the database
				$conn = mysqli_connect($host, $username, $password, $database_name, $port);

				// Check connection to database and inform user if it either connected successfully or failed
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
					echo "Connected successfully";
					echo "<br>";


				$sql = "INSERT INTO `users` (`User_Name`, `First_Name`, `Last_Name`, `Email`, `Password`) VALUES ('$userName', '$personFirst', '$personLast', '$email', '$passWord')";

                //informs the user that they are now entered into the system or spits out an error if something went wrong
				if (mysqli_query($conn, $sql)) {
					echo "New record created successfully";
					} else {
						echo "Error: " . $sql . "<br>" . mysqli_error($conn);
						}
					?>
			</p>
	</body>
</html>
