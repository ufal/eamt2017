<!DOCTYPE html>
<html>
<head>
	<title>Program</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:700,400,100&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='css/style.css' rel='stylesheet' type='text/css'>
	<style>
	@page  
{ 
    size: auto;   /* auto is the initial value */ 

    /* this affects the margin in the printer settings */ 
    margin: 25.4mm;
} 
	body {
		margin: 0;
	}
		body, a {
			color: black;
			font-size: 11pt;
			/*font-family: serif;*/
		}
	</style>
	<meta charset="utf-8">
</head>
<body>
<h1>Program</h1>
<br>
<?php
include("program/program.html");
?>

</body>
</html>