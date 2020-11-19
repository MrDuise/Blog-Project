
<?php
//Michael Duisenberg
//11-9-20
//CST-126
//MileStone 6 View Indivuadel Post page
//This page displays one post at a time, it also displays any comments on the post as well as the username of who made the comment
//Version 1.0
session_start();
require_once 'myfuncs.php';

?>

<!DOCTYPE html>
<html>
	<head>
	<link rel="icon" href="letter-b-64v-prints.png">
	<title> Post Viewer </title>
	<link rel="stylesheet" href="welcomeStyle.css">
	<style type="text/css">
	
	.postView{
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




	<meta charset="ISO-8859-1">

	</head>
	<body>
	<h1> Post Entry  </h1>
		<?php include_once 'showNavBar.php';?>

<div class="postView">
<p>
<?php
$id = $_GET['id'];
$userName = $_GET['userName'];


if(dbConnect())
{
    $sql = "SELECT * FROM `user_posts` WHERE `ID` = '$id' LIMIT 1";
    $result = mysqli_query(dbConnect(), $sql);
    if($result)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo "Post Entry: " . $row['Blog_Entry'] . "<br>";
            
            
            ?>
            
            <form action = "processComments.php">
            <input type="hidden" name="id" value = "<?php echo $id?>"></input>
            Comments:<textarea name="comments" rows="5" cols="50"></textarea>
            <button type="submit"> Submit Comments</button>
            </form>
            
            <?php 
            
            $sql_comments = "Select * FROM `user_comments` WHERE `user_posts_id` = '$id'";
            $result_comments = mysqli_query(dbConnect(), $sql_comments);
            
            if($result_comments)
            {
                while($row_comments = mysqli_fetch_assoc($result_comments))
                {
                    $userID = $row_comments['users_ID'];
                    $sql_userPoster = "SELECT *FROM `users` WHERE `ID` = '$userID'";
                    $resultUsernamePost = mysqli_query(dbConnect(), $sql_userPoster);
                    $row_username_post = mysqli_fetch_assoc($resultUsernamePost);
                    $postWritter = $row_username_post['User_Name'];
                    
                    echo $row_comments['comments'] . "<br>";
                    echo "This comment was made by: " . $postWritter . "<br>";
                    
                }
            }
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

</p>
</div>