 <?php
//Michael Duisenberg
//11-10-20
//CST-126
//MileStone 6 process Comments
//this page connects to the comment table and adds a users comment to it.
//version 1.0
session_start();
require_once 'myfuncs.php';
?>

<!DOCTYPE html>
<html>
    <title>Crazy Car Stories</title>
    <head>
    <link rel="icon" href="letter-b-64v-prints.png">
    <link rel="stylesheet" href="welcomeStyle.css">
    <style>
		/* centers output on screen */
			.middle	p{
					height: 6em;
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
    </head>

    <body>
    <h1>Comment Added</h1>
        	<div class="topnav">
            <p> Welcome <?php echo $_SESSION['username']; ?> </p>
			<a href="main-welcome.php">Home</a>
 			<a href="logOut.php">Logout</a> 
 			</div>


			<div class = "middle">
			<p>
			<?php 
			
			
			
			
			     if(dbConnect())
			     {
			         $entryPosts= array($_GET['comments'], $_GET['id'], $_SESSION['userid']);
			         $ratings = $_GET['Rating'];
			     }
			     
			    
                   
                      $sql = "INSERT INTO `user_comments`(`comments`,`Ratings`, `user_posts_ID`, `users_ID`) VALUES ('$entryPosts[0]','$ratings', '$entryPosts[1]','$entryPosts[2]')";
                       
                      
                       if (mysqli_query(dbConnect(), $sql))
                       {
                           echo "Comment Added <br>";
                           if($ratings != null)
                           {
                               echo "Rating added<br>";
                           }
                       }
                       
                       
                   
                      
              
                   
			     ?>
			</p>
			</div>	
	</body>
</html>
