
<?php
//Michael Duisenberg
//10-24-20
//CST-126
//MileStone 4 delete item handler
//connects to the admin page when the admin clicks the delete button under a users post
//Version 1.0
session_start();
require_once 'myfuncs.php';
?>

<!DOCTYPE html>
<html>
	<head>
	<link rel="icon" href="letter-b-64v-prints.png">
	<title>  Admin Page </title>
	<link rel="stylesheet" href="welcomeStyle.css">




	<meta charset="ISO-8859-1">

	</head>
	<body>
		<h1>User <?php echo $_SESSION['username']; ?> Entries </h1>
		<div class="topnav"> 
			<p> Welcome <?php echo $_SESSION['username']; ?> </p>
			<a href="viewPost.php">View User Posts</a>
			<a href="addPost.php">Add Post</a>
 			<a href="logOut.php">Logout</a> 
 			<a href="main-welcome.php">Home</a>
 			<a href="showAdminPage.php">Admin Page</a>
 		</div>


<?php


$itemToDelete = $_GET['id'];

$sql = "DELETE FROM `user_posts` WHERE `user_posts`.`ID` = '$itemToDelete'";



if(dbConnect())
{
    $result = mysqli_query(dbConnect(),$sql);
    
    if($result)
    {
        echo "Deleted Item " . $itemToDelete . "<br>";
    }
}

?>
        


<p> <?php include 'footer.php' ?> </p>
	</body>
</html>