<?php

	error_reporting(E_ERROR | E_PARSE);
	/*if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$msg=$_POST['psg'];
		echo($msg);
		$id=mt_rand();
		$ses=mt_rand();

	}
	$con = mysqli_connect("localhost","root","","u490425149_cat
");

// Check connection
	if (!$con)
	 {
    	echo("Falied To Connect Database");
    	
	}
	else
	{
		echo("Connected To Database");
	}
	$query="INSERT INTO `passage`(`psg`, `user_id`, `session_id`) VALUES ('$msg','$id','$ses')";
	
	if ($con->query($query) === TRUE) 
	{
    	echo "New record created successfully<br>";
    	echo($msg);
	} 
	else 
	{
    	echo "Error: " . $query . "<br>" . $con->error;
	}

$con->close();*/
header("location:redirect1.php");


?>