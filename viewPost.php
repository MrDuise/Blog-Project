<?php
//Michael Duisenberg
//10-18-20
//CST-126
//MileStone 3 View Post page
//This pages displays all of the users posts titles with a button that links to the rest of the post
//Version 2.0
session_start();
require_once 'myfuncs.php';
?>

<!DOCTYPE html>
<html>
	<head>
	<link rel="icon" href="letter-b-64v-prints.png">
	<title>  Post Viewer </title>
	<link rel="stylesheet" href="welcomeStyle.css">




	<meta charset="ISO-8859-1">

	</head>
	<body>
	<h1>User <?php echo $_SESSION['username']; ?> Entries </h1>
		<?php include_once 'showNavBar.php';?>
	<p>
		<?php 

		$id = $_SESSION['userid'];
            $sql = "SELECT * FROM `user_posts` WHERE `users_ID` = '$id'";
            $sql_user = "SELECT * FROM `users` WHERE `ID` = '$id'";//select statement for getting the username out of the database
            $result_userName = mysqli_query(dbConnect(), $sql_user);
            $row_user = mysqli_fetch_assoc($result_userName);
            $userName = $row_user['User_Name'];

            if(dbConnect())
            {
              $result = mysqli_query(dbConnect(),$sql);
    
                if($result)
                {
                     while($row = mysqli_fetch_assoc($result))
                    {
                     echo "Post ID: " . $row['ID'] . "<br>";
                     echo "Post Title: " . $row['Blog_Title']. " ";
                     
                    
                         
                             
                         
                 
                     
                     ?>
         </p>
         
                    
                     <form action = "viewPostContent.php">
            		<input type="hidden" name="id" value = "<?php echo $row['ID'];?>"></input>
            		<input type="hidden" name="userName" value = "<?php echo $userName;?>"></input> 
           			 <button type="submit">View</button>
           			 </form>
                     
          <p>
                     <?php
                     echo "<br>";
                     echo "===========<br>";
                    }
                 }    
            }
        ?>
	</p>

	<p><?php include 'footer.php' ?> </p>
	</body>
</html>