<?php 
//Michael Duisenberg
//CST-126
//10-15-20
//Milestone 3
//This page displays an error message when the user fails to login
//This page can also be used in other error messages as the code is $message variable is not defined on this page, but on the calling page
?> 
 
 
 
 
 
 <html>
	<head>
	<link rel="stylesheet" href="welcomeStyle.css">		
	</head>
		<body>

            <!-- code has a warning becuase variable does not excist in file, but it does excist in loginHandler file, so code works fine -->
				<h2><?php echo $message ?></h2>
		</body>





</html>
