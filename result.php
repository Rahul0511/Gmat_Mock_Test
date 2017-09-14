<?php
	
	//starting the session for result 
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>GMAT|IR Section|Assignment</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
	$result=$_SESSION['result'];
	$marks=0;
	if($result>=10)
	{
		$marks=8;
	}
	if($marks<=9 AND $marks>=8)
	{
		$marks=7;
	}
	if($marks<=7 AND $marks>=6)
	{
		$marks=6;
	}
	if ($marks>5) 
	{
		$marks=5;
	}
	if ($marks <=5 AND $marks >=0)
		$marks=2;
?>
		<div class="col-md-3">
			
		</div>
			<div class="col-md-6 sol-bro">
					<h2 class="text-center">Result</h2>
					<h3 class="text-center">Marks <?php echo "$marks"; ?>/8</h3>
					<h3 class="text-center">Good</h3>
			</div>
		<div class="col-md-3">
			
		</div>
</body>
</html>

<?php
	session_destroy();	
?>