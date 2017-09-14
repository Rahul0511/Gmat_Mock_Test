<?php
	error_reporting(E_ERROR | E_PARSE);
	session_start();
	$result=$_SESSION['result'];
	ob_start();
	//echo $result;
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
					
					<p><b>Q3)</b>The graph on the left represents the results of a survey taken by focus groups each shown a different version of an upcoming commercial for a sports car. <br><br>

					Each version had a different amount of content showing the car in fast-driving scenes. <br><br>

					After the group viewed the commercial, each member was asked two questions: "Did you feel that the car was sporty?" and "How likely are you to purchase this car?" <br><br>

					The position of the circles on the left indicate how much fast-driving content (F) was in the version of the commercial show and the % of viewers who found the car to be 'sporty' (S). The relative size of the circles indicates how likely the members of the group were to purchase the car (L). The bigger the circle, the more likely they were to purchase. 
					<br><br>
					Use the drop-down menus to fill in the blanks in each of the following statements based on the information given by the graph.</p>

					<img src="images/gi/q3.jpg" alt="Question No 3" class="ques"><br><br>
					<form method="POST" action="q3.php">
					<!--option start from here-->
						<!--first option start here-->
						<p>If the relationship between L and S were inversed, then the greatest effect on the graph would be to the
						<select id="op1" name="op1" >
							<option Value="Select" selected="selected" disabled="disabled">Select..</option>
							<option>Circle A</option>
							<option>Circle B</option>
							<option>Circle C</option>
							<option>Circle D</option>
						</select> 
						of the circles.
						 </p>
						 <!--first option ends here-->
						 <!--second option start here-->
						 <p>
						 	If the relationship between L and S were inversed, then the largest circle would be  
						   <select id="op2" name="op2">
								<option Value="Select" selected="selected" disabled="disabled">Select..</option>
								<option>Positive</option>
								<option>Negative</option>
	
						   </select> 
						 	.
						 </p>
						 <!--second option ends here-->
						 <!--third option starts here-->
						 <p>
						 	If the relationship between L and S were inversed, then were would be a  
						 	<select id="op3" name="op3">
								<option Value="Select" selected="selected" disabled="disabled">Select..</option>
								<option>Positive</option>
								<option>Negative</option>

						   </select> 
						  	 correlation between F and L.
						 </p>
						 	
						 <!--third option ends here-->
						  <!--fourth option starts here-->
						 <p>
						 	If the relationship between L and S were inversed, then were would be a  
						 	<select id="op4" name="op4">
								<option Value="Select" selected="selected" disabled="disabled">Select..</option>
								<option>Positive</option>
								<option>Negative</option>

						   </select> 
						  	correlation between S and L.
						 </p>
						 	
						 <!--fourth option ends here-->
						 <!--fifth option starts here-->
						 <p>
						 	If the relationship between L and S were inversed, then were would be a
						 	<select id="op5" name="op5">
								<option Value="Select" selected="selected" disabled="disabled">Select..</option>
								<option>Positive</option>
								<option>Negative</option>
						     </select> 
						  correlation between F and S.
						 </p>
						 	
						 <!--fifth option ends here-->
					<!--option  end here-->
						<br><br>

					<!--submit selection starts from here-->
	<center>
	<a class="btn btn-success" onclick="validate()">Submit</a>
	&nbsp;&nbsp;
	<button class="btn btn-info" id="mybtn" disabled >&nbsp;Next &nbsp;</button>
	</center>
	</form>
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
		var op3=document.getElementById("op4").value;
		
		
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
		if (op4=="Select") 
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
	$op4=$_POST['op4'];
	$op5=$_POST['op5'];

	if($op1=="Circle A" && $op2=="Positive" && $op3=="Positive" && $op4=="Positive" && $op5=="Positive")
		{
			$result=$result+1;
			$_SESSION["result"]=$result;
			header("refresh:0;url=q4.php");
		}
	else
	{
		$_SESSION["result"]=$result;
		header("refresh:0;url=q4.php");
	}		
}
?>
		<div class="container">
				<div class="progress">
					
	    			<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:24%">
	     				 2 of 12 Complete
	    			</div>
				</div>
		</div>
  </body>
</html>

