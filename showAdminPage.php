<?php
//Michael Duisenberg
//10-25-20
//CST-126
//MileStone 4 Admin Page
//This page allows the admin to see all the users in the blog, and all the blog posts, then either delete or edit those posts
//Version 1.0
session_start();
require_once 'myfuncs.php';		
?>

<!DOCTYPE html>
<html>
	<head>
	<?php
		if($_SESSION['role'] != 'admin')
		{
   			 echo "Please login in as a admin";		
		}
		?>
	<link rel="icon" href="letter-b-64v-prints.png">
	<title>  Admin Page </title>
	<link rel="stylesheet" href="welcomeStyle.css">




	<meta charset="ISO-8859-1">

	</head>
	<body>
	<h1> Admin Editor</h1>
		<?php include_once 'showNavBar.php';?>


<?php
		
		

require 'utility.php';
$users = getAllUser();

include('displayUsers.php');

echo "<br>";

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
            
            ?>
            
            
            <form action = "processDeleteItem.php">
            <input type="hidden" name="id" value = "<?php echo $row['ID'];?>"></input>
            <button type="submit">Delete</button>
            </form>
            
            <form action = "showEditForm.php">
            <input type="hidden" name="id" value = "<?php echo $row['ID'];?>"></input>
            <button type="submit">Edit</button>
            </form>
           
            <?php 
            
            echo "===========<br>";
        }
    }
}

            ?>
        


<p> <?php include 'footer.php' ?> </p>
	</body>
</html>
