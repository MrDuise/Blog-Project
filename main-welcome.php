<?php 
//Michael Duisenberg
//10-20-20
//CST-126
//MileStone 3 after-login welcome page
//this is the main page that the user is greated with after they login
//Version 2.0
?>

<?php session_start(); ?>

<!DOCTYPE html>
<html>
	<title>Crazy Car Stories</title>
		<head>
		<link rel="icon" href="letter-b-64v-prints.png">
		<link rel="stylesheet" href="welcomeStyle.css">		
		</head>

		<body>
		<h1>Crazy Car Stories</h1>

			<?php 
                if (!isset($_SESSION['username'])) {
                     echo "Please login first <a href='userLogin.php'> here </a>";
                        exit;
                    }
                ?>
			<?php include_once 'showNavBar.php';?>
 	
 	
 			<p><?php include 'footer.php' ?> </p>
		
		</body>

</html>