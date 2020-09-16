<html>
	<head>
		<title> Welcome to the Blog</title>
		<style>
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


				// Create connection
				$conn = mysqli_connect($host, $username, $password, $database_name, $port);

				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
					echo "Connected successfully";
					echo "<br>";


				$sql = "INSERT INTO `users` (`User_Name`, `First_Name`, `Last_Name`, `Email`, `Password`) VALUES ('$userName', '$personFirst', '$personLast', '$email', '$passWord')";


				if (mysqli_query($conn, $sql)) {
					echo "New record created successfully";
					} else {
						echo "Error: " . $sql . "<br>" . mysqli_error($conn);
						}
					?>
			</p>
	</body>
</html>
