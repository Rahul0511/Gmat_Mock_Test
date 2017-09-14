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
					<b>Q5)</b>	
				<ul class="nav nav-tabs">
				    <li class="active"><a data-toggle="tab" href="#home">Message 1</a></li>
				    <li><a data-toggle="tab" href="#menu1">Message 2</a></li>
				    <li><a data-toggle="tab" href="#menu2">Message 3</a></li>
				    
				</ul>
			<div class="tab-content">
			    <div id="home" class="tab-pane fade in active">
			      <h3>Message sent from a real estate agent to his clients</h3>
			      <p>10:15 AM - Good news! We have received an offer on your home. The offer is for $300,000. While I know this is quite a bit lower than your asking price, it is common for buyers to make an aggressively low bid to try to bring down the seller's price. Based on my experience, I expect that you can counter at a price of $345,000, and still end up agreeing on a price that is no lower than 10% below your asking price. Just let me know what you would like to do!</p>
			    </div>
			    <div id="menu1" class="tab-pane fade">
			      <h3>Message sent from clients to their real estate agent, in response to the agent's 10:15 AM message </h3>
			      <p>10:52 AM - We are glad to hear that someone has made an offer on our home! You are right, though. Their offer is very low compared to our asking price. While we understand that is the nature of negotiation, we are reluctant to give so much ground that we end up at a price that's too low for us. After giving it some thought, we think that making a counter offer at $350,000 makes sense. That gives us room to negotiate more if the buyer wants to make another counter offer. Also, there are other concessions we would be willing to make besides price, if you think that might help us reach a deal. Please communicate our counter offer to the buyer, and let us know how it goes.</p>
			    </div>
			    <div id="menu2" class="tab-pane fade">
			      <h3>Message sent from a real estate agent to his clients, in response to their 10:52 AM message </h3>
			      <p>12:28 PM - I talked to the buyers' agent, and it sounds as though they are willing to negotiate further on price, although the buyers have said that $350,000 is "a lot more' than they can afford. I also mentioned your willingness to negotiate on items other than price, and they have expressed that making this sale happen no later than mid-August appeals to them, they can get settled before the new school year starts for their children. I expect that, if you offer them a price of $330,000 and agree to make the deal happen by early August, they will agree to a deal. Please let me know what you would like to do.</p>
			    </div>
			  
			  </div>

			</div>
					<div class="col-md-6">

					<p><b>Consider each of the following statements. Does the information in the three articles support the inference as stated?</b></p>
					<form method="POST" action="q5.php">
						
					
					<table cellspacing="10">
					<tr>
						<td>Yes</td>
						<td>No</td>
						<td></td>
					</tr>
					<tr>
						<td><input type="radio" name="op1" id="option1" value="Yes"></td>
						<td><input type="radio" name="op1" id="option2" value="No"></td>
						<td><p>	The home sellers' asking price for their home is at least $380,000.</p></td>
					</tr>
					<tr>
						<td><input type="radio" name="op2" id="option3" value="Yes"></td>
						<td><input type="radio" name="op2" id="option4" value="No"></td>
						<td><p>	For the buyers, the ability to complete the purchase before mid-August is more important than the final price of the home.</p></td>
					</tr>
					<tr>
						<td><input type="radio" name="op3" id="option5" value="Yes"></td>
						<td><input type="radio" name="op3" id="option6" value="No"></td>
						<td><p>	It is possible for the buyers and sellers to make a deal in which neither side needs to change its opening offer by more than 15%.</p></td>
					</tr>
					<tr>
						<td><input type="radio" name="op4" id="option7" value="Yes"></td>
						<td><input type="radio" name="op4" id="option8" value="No"></td>
						<td><p>The sellers' real estate agent is more likely to accept a lower final price of the home than are the sellers themselves.</p></td>
					</tr>
				</table>
						
					</div>
			</div>
			
				<!--submit selection starts from here-->
			<center>
			<a class="btn btn-success" onclick="validate()">Submit</a>
			&nbsp;&nbsp;
			<button class="btn btn-info" id="mybtn" disabled>
			&nbsp;Next &nbsp;</button>
			</center>
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
					header('Location:q6.php');
				}
			else
			{
				$_SESSION["result"]=$result;
				header('Location:q6.php');
			}
	}

?>
	
	<br>
	<br>
	<br>

	<!--Progess Bar Starts Here-->
		<div class="container">
				<div class="progress">
					
	    			<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:43%">
	     				 4 of 12 Complete
	    			</div>
				</div>
		</div>
	<!--Progess Bar ends Here-->



    </body>
</html>			

