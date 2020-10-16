<?php 
//Michael Duisenberg
//10-13-20
//CST-126
//MileStone 3 add post page
//This page is the form that allows a user to enter a new blog post
//Version 1.0

session_start();
?>

<!DOCTYPE html>
<html>
	<title>Blog Entry</title>
		<head>
		<link rel="icon" href="letter-b-64v-prints.png">
		<link rel="stylesheet" href="welcomeStyle.css">		
		
		<style>
		
			<?php 
			//CSS was gotten from https://github.com/shadsluiter/recipeList/blob/master/custom-styles.css .form-container
			?>
			.top-of-form{
			 border:1px solid black;
	       padding:20px;
	       margin-left:auto;
	       margin-right:auto;
	       margin-bottom:10px;
	       margin-top:5px;
	       width:60%;
	       border-radius:10px;
	       background-color:rgb(250, 250,250);
	       font-size:1.2em;
	       text-align:center;
			
			}
	</style>
		
		</head>

		<body>
				<h1> Blog Entry </h1>
					<div class="topnav">
            		<p> Welcome <?php echo $_SESSION['username']; ?> </p>
					<a href="main-welcome.php">Home</a>
 					<a href="logOut.php">Logout</a> 
 					</div>
			<div class = "top-of-form">
				<h2>Add a Post</h2>
				<p>Fill out all of the fields and submit</p>

				<form action="processAddItem.php" method = "post">
   				 <input type="text" name="postTitle" placeholder="Post Title" required/><br/>
   				 <textarea rows="5" cols="50" name="blogEntry" placeholder="Blog Entry" required></textarea><br>
   
    				<button type="submit">Add</button>
				</form>
			</div>


</body>
</html>
