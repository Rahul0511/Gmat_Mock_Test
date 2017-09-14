<?php
	
	//starting the session for result 
error_reporting(E_ERROR | E_PARSE);
	session_start();
	$result = $_SESSION['result'];
	ob_start();

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
			    	<h2 class="text-center">Multi-Source Reasoning</h2>
			  </div>
			</div>
	</div>
			<div class="container">
					<div class="col-md-12">
					<div class="col-md-6">
					<b>Q4)</b>	
				<ul class="nav nav-tabs">
				    <li class="active"><a data-toggle="tab" href="#home">Article 1</a></li>
				    <li><a data-toggle="tab" href="#menu1">Article 2</a></li>
				    <li><a data-toggle="tab" href="#menu2">Article 3</a></li>
				    
				</ul>
			<div class="tab-content">
			    <div id="home" class="tab-pane fade in active">
			      <h3>News article in a popular business publication </h3>
			      <p>June 7 - If current trends continue, farmed seafood will overtake ocean fishing as the world's largest source of seafood by 2025. Aggressive overfishing of the world's oceans and the inability of world governments to agree on fishing limits mean that farming will become critical to the industry's ability to meet worldwide seafood demand. Additionally, recent concerns about mercury levels in wild-caught fish have led many consumers to prefer farmed fish, further creating increased demand for this relatively new source of seafood.</p>
			    </div>
			    <div id="menu1" class="tab-pane fade">
			      <h3>Interview with a well known scientist in a technology journal </h3>
			      <p>July 2 - Dr. Jason Dempster, one of the world's most outspoken critics of the seafood industry's unwillingness to curb its output in order to protect the fish population, suggests that more than two dozen popular species may become virtually extinct in the next several decades. 

				 "I understand that consumers keep buying the seafood, and fishermen are naturally going to meet demand wherever they can find it. However, if something isn't done to meet the demand another way, by the middle of this century even something as common as tuna may become a delicacy only the world's wealthiest families can afford."</p>
			    </div>
			    <div id="menu2" class="tab-pane fade">
			      <h3>Article from a weekly news magazine</h3>
			      <p>July 20 - Demand for tilapia, one of the world's most popular species of fish, has grown 1000% over the last decade as people around the world have discovered it as a low-cost fish that goes well with a variety of foods. This increased demand has encouraged countless tilapia farms to open in China, and American officials have expressed concern that not all tilapia imported from China meets U.S. safety standards. Some experts in the U.S. have called for creating more stringent standards for all seafood imports, but Chinese authorities warn that this may dramatically increase the cost of seafood imported into the United States.</p>
			    </div>
			  
			  </div>

			</div>
					<div class="col-md-6">

					<p><b>Consider each of the following statements. Does the information in the three articles support the inference as stated?</b></p>
					<form method="POST" action="q4.php">
						
					
					<table cellspacing="10">
					<tr>
						<td>Yes</td>
						<td>No</td>
						<td></td>
					</tr>
					<tr>
						<td><input type="radio" name="op1" id="option1" value="Yes"></td>
						<td><input type="radio" name="op1" id="option2" value="No"></td>
						<td><p>The world's governments usually do not agree with one another on how to deal with matters related to fishing and seafood farming.</p></td>
					</tr>
					<tr>
						<td><input type="radio" name="op2" id="option3" value="Yes"></td>
						<td><input type="radio" name="op2" id="option4" value="No"></td>
						<td><p>	An increase in worldwide demand for tilapia has driven the world's ocean fish population to dangerously low levels.</p></td>
					</tr>
					<tr>
						<td><input type="radio" name="op3" id="option5" value="Yes"></td>
						<td><input type="radio" name="op3" id="option6" value="No"></td>
						<td><p>Dr. Dempster supports an increase in fish farming.</p></td>
					</tr>
					<tr>
						<td><input type="radio" name="op4" id="option7" value="Yes"></td>
						<td><input type="radio" name="op4" id="option8" value="No"></td>
						<td><p>Chinese tilapia farms have led some U.S. consumers to worry about the levels of mercury in their seafood..</p></td>
					</tr>
				</table>
						
					</div>
			</div>

				<!--submit selection starts from here-->
			<center>
			<a class="btn btn-success" onclick="validate()">Submit</a>
			&nbsp;&nbsp;
			<button class="btn btn-info" id="mybtn" disabled>&nbsp;Next &nbsp;</button></center>
				<!--submit selection ends here-->
				</form>
			</div>
			
	<script type="text/javascript">

	function validate()
	{
			var op1 = document.getElementById('option1');
			var op2 = document.getElementById('option2');
			var op3 = document.getElementById('option3');
			var op4 = document.getElementById('option4');
			var op5 = document.getElementById('option5');
			var op6 = document.getElementById('option6');
			var op7 = document.getElementById('option7');
			var op8 = document.getElementById('option8');	

		if (op1.checked == false && op2.checked == false ) 
			{
				alert ( "Please Select All The Option" );
				return false;
			}
		if(op3.checked == false && op4.checked == false )
			{
				alert ( "Please Select All The Option" );
				return false;
			} 
		if(op5.checked == false && op6.checked == false) 
			{
				alert ( "Please Select All The Option" );
				return false;
			} 
		if(op7.checked == false && op8.checked == false)
			{
				alert ( "Please Select All The Option" );
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

	if($op1=="True" && $op2=="True" && $op3=="True" && $op4=="True")
		{
			$result=$result+1;
			$_SESSION["result"]=$result;
			header('Location:q5.php');
		}
	else
	{
		$_SESSION["result"]=$result;
		header('Location:q5.php');
	}
}	
?>
	<br>
	<br>
	<br>

		<div class="container">
				<div class="progress">
					
	    			<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:33%">
	     				 3 of 12 Complete
	    			</div>
				</div>
		</div>


    </body>
</html>			

