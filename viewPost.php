<?php
//Michael Duisenberg
//10-18-20
//CST-126
//MileStone 3 View Post page
//This pages displays all of the users posts
//Version 1.0
session_start();
require_once 'myfuncs.php';
?>

<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="letter-b-64v-prints.png">
<title>  Welcome to my blog </title>
<link rel="stylesheet" href="welcomeStyle.css">




<meta charset="ISO-8859-1">

</head>
<body>
<h1>User <?php echo $_SESSION['username']; ?> Entries </h1>
<div class="topnav"> 
	<p> Welcome <?php echo $_SESSION['username']; ?> </p>
	<a href="addPost.php">Add Post</a>
 	<a href="logOut.php">Logout</a> 
 	<a href="main-welcome.php">Home</a>
 	</div>
<p>
<?php 


$sql = "SELECT * FROM `user_posts`";


if(dbConnect())
{
    $result = mysqli_query(dbConnect(),$sql);
    
    if($result)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo "Post ID: " . $row['ID'] . "<br>";
            echo "Post Title: " . $row['Blog_Title'] . "<br>";
            echo "Post Entry: " . $row['Blog_Entry'] . "<br>";
            echo "===========<br>";
        }
    }    
}
?>
</p>

<p><?php include 'footer.php' ?> </p>
</body>
</html>