<?php
// Michael Duisenberg
// 11-18-20
// This is the form for searching for a blog post
// Milestone 7
// CST-126 Blog Project
session_start();
require_once 'myfuncs.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="letter-b-64v-prints.png">
<title>Search Posts</title>
<link rel="stylesheet" href="welcomeStyle.css">
<style type="text/css">
form {
	height: 7em;
	position: relative;
	margin: 0;
	position: absolute;
	top: 50%;
	left: 50%;
	margin-right: -50%;
	transform: translate(-50%, -50%);
	text-align: center;
	background-color: grey;
	width: 300px;
	border: 1px solid black;
}
</style>




<meta charset="ISO-8859-1">

</head>
<body>
		<h1>Search Posts</h1>
<?php include_once 'showNavBar.php';?>



		<form action="searchFormHandler.php" method="get">
				<input type="text" name="title" placeholder="Title" required /><br />
				<input type="text" name="keyWords" placeholder="Post Key Words"
						required /><br /> <input type="submit" value="Search" />
		</form>