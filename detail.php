<!DOCTYPE html>
<html>
<head>
	<title>Massage</title>
	<style>
		  #a
		  {
		  	color:#2ba1af; font-size:65px;
		  }
		 #b a
		 {
		 	text-decoration: none;
		 	color:#c3c3c3; 
		 	font-size:20px;
		 }
	</style>
</head>
<body>
    <link href="css/menu.css" rel="stylesheet" type="text/css">
</head>
<body background="images/bged.jpg">
	<center>
		<h1 id="a">Upload Success...</h1>
		<h4 id="b"><a href="index.php">Go To Home</a></h4>
	</center>
</body>
</html>
<?php

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$feedback=$_POST['feedback'];

$con=mysqli_connect("localhost","root","","gabi");
if(!$con)
{
	die('Could Not Connect:'.mysql_error());
}

mysqli_select_db($con,"db");

$query="INSERT INTO data(name,email,subject,feedback)VALUES('$name','$email','$subject','$feedback')";
if(!mysqli_query($con,$query))
{
	die('Error In Inserting Data'.mysqli_error);
}
else
{
	echo "";
}
?>