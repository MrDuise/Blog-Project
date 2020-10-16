<?php 
//Michael Duisenberg
//10-9-20
//CST-126
//MileStone 3 after-login welcome page
//this is the main page that the user is greated with after they login
//Version 1.0
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
			<div class="topnav"> 
			<p> Welcome <?php echo $_SESSION['username']; ?> </p>
			<a href="addPost.php">Add Post</a>
 			<a href="logOut.php">Logout</a> 
 			<a href="viewPost.php">View Posts</a>
 			</div>
 	
 	
 			<p><?php include 'footer.php' ?> </p>
		
		</body>

</html>
