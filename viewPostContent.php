
<?php
//Michael Duisenberg
//11-9-20
//CST-126
//MileStone 6 Admin Page
//This page allows the admin to see all the users in the blog, and all the blog posts, then either delete or edit those posts
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

if(dbConnect())
{
    $sql = "SELECT * FROM `user_posts` WHERE `ID` = '$id' LIMIT 1";
    $result = mysqli_query(dbConnect(), $sql);
    if($result)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo "Post Entry: " . $row['Blog_Entry'] . "<br>";
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