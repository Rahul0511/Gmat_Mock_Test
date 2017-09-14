<?php
	error_reporting(E_ERROR | E_PARSE);
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
					
					<p><b>Q1)</b>The graph at the below is a scatter plot with 35 points, each representing the population of a city and the number of auto thefts in that city, per person, per year. All 35 measurements were made in the year 2010, counting the number of auto thefts during the year and the number of residents in each city as of January 1, 2010. The dashed line runs through points (0,0) and (35,1200).
					<br><br>
					Use the drop-down menus to fill in the blanks in each of the following statements based on the information given by the graph.</p>

					<img src="images/gi/q1.png" alt="Question No 1 " class="ques"><br><br>
					<form method="POST" action="q1.php">
					<!--option start from here-->
						<!--first option start here-->
						<p>The number of cities that had at least 20 auto thefts per 1,000 is closest to 
						<select id="op1" name="op1" >
							<option Value="Select" selected="selected" disabled="disabled">Select..</option>
							<option value="16">16%</option>	
							<option value="33">33%</option>	
							<option value="50">50%</option>	
						</select> 
						 of the total cities measured
						 </p>
						 <!--first option ends here-->
						 <!--second option start here-->
						 <p>
						 	Every city with a population of no more than 600,000 had no more than   
						   <select id="op2" name="op2">
								<option Value="Select" selected="selected" disabled="disabled">Select..</option>
								<option value="10">10</option>	
								<option value="20">20</option>	
								<option value="30">30</option>	
						   </select> 
						 	auto thefts per 1,000 people.
						 </p>
						 <!--second option ends here-->
						 <!--third option starts here-->
						 	There is a  
						 	<select id="op3" name="op3">
								<option Value="Select" selected="selected" disabled="disabled">Select..</option>
								<option value="positive">positive</option>	
								<option value="negative">negative</option>	
								<option value="equivelent ">equivelent</option>	
						   </select> 
						   	
						 	 relationship between a city's population and its number of auto thefts per 1,000 people.
						 <!--third option ends here-->
					<!--option  end here-->
						<br><br>

					<!--submit selection starts from here-->
	<center>
		<a  class="btn btn-success" onclick="validate()">Submit</a>
			&nbsp;&nbsp;
		<input type="submit" class="btn btn-info" id="mybtn" disabled value="Next">
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
		if (op2=="Select") 
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
<!--scripting ends here-->
<!--data processing starts here-->
	<?php
	error_reporting(E_ERROR | E_PARSE);
if($_SERVER['REQUEST_METHOD']=='POST'){
	$op1=$_POST['op1'];
	$op2=$_POST['op2'];
	$op3=$_POST['op3'];
	
		if($op1=="16" && $op2=="10" && $op3=="positive")
		{
			$_SESSION["result"] = 1;
			header('Location:q2.php');
		}
		else
		{
			$_SESSION["result"] = 0;
			header('Location:q2.php');
		}
}		
    ?>
<!--data processing starts here-->
	<div class="container">
			<div class="progress">
				<span style="color: black ;"></span> 0 of 12 Complete
    			<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:8.3%">
     
    			</div>
			</div>
	</div>
	
  </body>
</html>

