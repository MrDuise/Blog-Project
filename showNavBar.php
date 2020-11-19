<?php 
//Michael Duisenberg
//10-20-20
//CST-126
//This page just displays a nav bar at the top of the screen, it also checks
//Version 1.0


?>

<!DOCTYPE html>
<html>
	<head>
	<link rel="icon" href="letter-b-64v-prints.png">
	
	<link rel="stylesheet" href="welcomeStyle.css">




	<meta charset="ISO-8859-1">

	</head>
	<body>
		
		<div class="topnav"> 
			<p> Welcome <?php echo $_SESSION['username']; ?> </p>
			<a href="searchForm.php">Search Posts</a>
			<a href="viewPost.php">View User Posts</a>
			<a href="addPost.php">Add Post</a>
 			<a href="logOut.php">Logout</a> 
 			<a href="main-welcome.php">Home</a>
 			<?php if($_SESSION['role'] == 'admin'): ?>
 			<a href="showAdminPage.php">Admin Page</a>
 			<?php endif; ?>
 		</div>



	</body>
</html>