<?php
//Michael Duisenberg
//10-25-20
//CST-126
//MileStone 4 Show edit form page
//This page brings up the same form that allows a user to add a post, but instead is used by the admin to edit posts
//Version 1.0
session_start();
require_once 'myfuncs.php';
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
		
		
		<?php 
		
		$id = $_GET['id'];
		
		
		if(dbConnect())
		{
		    $sql = "SELECT * FROM `user_posts` WHERE `ID` = '$id' LIMIT 1";
		    $result = mysqli_query(dbConnect(), $sql);
		    if($result)
		    {
		       while($row = mysqli_fetch_assoc($result))
		       {
		           $blog_title = $row['Blog_Title'];
		           $blog_entry = $row['Blog_Entry'];
		       }  
		    }
		    else 
		    {
		        echo " There was an sql problem " . mysqli_error(dbConnect());
		    }
		}
		else
		{
		    echo "error connecting " . mysqli_connect_error();
		}
		
		?>
		

		
				<h1> Post Editer </h1>
					<?php include_once 'showNavBar.php';?>
			<div class = "top-of-form">
				<h2>Edit Post</h2>
				<p>Fill out all of the fields and submit</p>

				<form action="processEditItem.php" method = "get">
				<input type = "hidden" name = "id" value = "<?php echo $id; ?>"> </input>
   				 <input type="text" name="postTitle" value = "<?php echo $blog_title; ?>" required/><br/>
   				 <textarea rows="5" cols="50" name="blogEntry" required><?php echo $blog_entry ?></textarea><br>
   
    				<button type="submit">Edit</button>
				</form>
			</div>


</body>
</html>
