<?php 
//Michael Duisenberg
//10-25-20
//CST-126 Blog Project
//Milestone 4 display users page
//This page Creates a table and displays all the users from the database onto the page
// Version 1.0
?>
<html>
<header>


 <table>
 <tr>
 <th>ID</th><th>First Name</th><th>Last Name</th>
 </tr>


 <?php
        
 		for($x=0;$x < count($users);$x++)
 		{
 		  echo "<tr>";
 	          echo "<td>" . $users[$x][0] . "</td>" . "<td>" . 
              $users[$x][1] . "</td>" . "</td>" . "<td>" . $users[$x][2] . "</td>";
 		  echo "</tr>";
 		}
 ?>
 
 </table>






</header>








</html>