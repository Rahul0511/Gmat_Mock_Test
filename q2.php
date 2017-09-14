<?php
	error_reporting(E_ERROR | E_PARSE);
	session_start();
	$result = $_SESSION['result'];
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
	<div col-md-12>
			<div class="container">
			  <div class="jumbotron">
			    	<h2 class="text-center">Graphics Interpretation</h2>
			  </div>
			</div>
			<div class="container">
				<div class="col-md-12">
				    <p id="timer"></p>
			    </div>
			</div>
			
			<div class="container">
					
					<p><b>Q2)</b>The graph at the left is a scatter plot with 35 points, each representing the population of a city and the number of auto thefts in that city, per person, per year. All 35 measurements were made in the year 2010, counting the number of auto thefts during the year and the number of residents in each city as of January 1, 2010. The dashed line runs through points (0,0) and (35,1200).
					<br><br>
					Use the drop-down menus to fill in the blanks in each of the following statements based on the information given by the graph.</p>

					<img src="images/gi/q2.png" alt="Question No 2 " class="ques"><br><br>
					<form method="POST" action="q2.php">
					<!--option start from here-->
						<!--first option start here-->
						<p>If a city had no more than 20 auto thefts per 1,000 people, it had a population of no more than 
						<select id="op1" name="op1" >
							<option Value="Select" selected="selected" disabled="disabled">Select..</option>
							<option value="600000">600,000</option>	
							<option value="800000">800,000</option>	
							<option value="1000000">1,000,000</option>	
						</select> 
						people.
						 </p>
						 <!--first option ends here-->
						 <!--second option start here-->
						 <p>
						 	The dashed line has a slope that is   
						 <select id="op2" name="op2">
								<option Value="Select" selected="selected" disabled="disabled">Select..</option>
								<option value="less_than">less than</option>	
								<option value="greater_than">greater than</option>	
								<option value="equal_to">equal to</option>	
						   </select>
						 	the slope of the regression line.
						 </p>
						 <!--second option starts here-->
						
						    <p>
						 	According to this chart, a city with more than 10 auto thefts per 1,000 people is  
						   <select id="op3" name="op3">
								<option Value="Select" selected="selected" disabled="disabled">Select..</option>
								<option value="less_likely">less likely</option>
								<option value="more_likely">more likely</option>
						<option value="equally_likely">equally likely</option>	
						   </select> 
						 	to have a population of at least 600,000 people.
						 </p>
						   	
						 	
						 <!--third option ends here-->
					<!--option  end here-->
						<br><br>

					<!--submit selection starts from here-->
	<center>
	<a class="btn btn-success" onclick="validate()">Submit</a>
	&nbsp;&nbsp;
	<button class="btn btn-info" id="mybtn" disabled >&nbsp;Next &nbsp;</button>
	</form>
	</center>
	<br>
	<br>
					<!--submit selection ends here-->
			</div>
	</div>

	<script type="text/javascript">
	function validate()
	{

			//javascript validation
		var op1=document.getElementById("op1").value;
		var op2=document.getElementById("op2").value;
		var op3=document.getElementById("op3").value;
		
		
		if (op1=="Select") 
		{
			alert("Please Select All Option");
			return false;
		}
		if (op3=="Select") 
		{
			alert("Please Select All Option");
			return false;
		}
		if (op3=="Select") 
		{
			alert("Please Select All Option");
			return false;
		}

		else
		{
		
		document.getElementById("mybtn").disabled = false;
	
		}
	}

	
		
	</script>
	<?php
		error_reporting(E_ERROR | E_PARSE);
if($_SERVER['REQUEST_METHOD']=='POST'){
		$op1=$_POST['op1'];
		$op2=$_POST['op2'];
		$op3=$_POST['op3'];
		if($op1=="600000" && $op2=="less_than" && $op3=="less_likely")
		{
			$result=$result+1;
			$_SESSION["result"]=$result;
			header('Location:q3.php');
		}
		else
		{
			$_SESSION["result"]=$result;
			header('Location:q3.php');
		}
}
	?>
	<div class="container">
			<div class="progress">
				
    			<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:16.6%">
     				 1 of 12 Complete
    			</div>
			</div>
	</div>
  </body>
</html>

