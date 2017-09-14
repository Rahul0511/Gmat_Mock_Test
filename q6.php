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
					<b>Q6)</b>	
				<ul class="nav nav-tabs">
				    <li class="active"><a data-toggle="tab" href="#home">Promotions</a></li>
				    <li><a data-toggle="tab" href="#menu1">Prizes</a></li>
				   
				    
				</ul>
			<div class="tab-content">
			    <div id="home" class="tab-pane fade in active">
			     
			      <p>Manufacturers will often provide after-purchase rebates to consumers who purchase their product from a retailer as an incentive for consumers to buy their products over competitors products. 
			      <br>
			      <br>
				House Depot, a large home improvement retailer, has several manufacturer rebate promotions on popular home improvement products during the month of July. In order to qualify for the rebates, one must purchase at least the minimum dollar amount for each product according to the table below. </p>
				<h4>House Depot Manufacturer Rebates on Select Products</h4>
				 <table class="table table-bordered">
					    <thead>
					      <tr>
					      	<th></th>
					        <th>Floor Tiles</th>
					        <th>Paint</th>
					        <th>Wallpaper</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <td>$50-$100</td>
					        <td>$10</td>
					        <td>None</td>
					        <td>$20</td>
					      </tr>
					      <tr>
					        <td>Over $100</td>
					        <td>$20</td>
					        <td>$15</td>
					        <td>$35</td>
					      </tr>
					    </tbody>
					  </table>
			    </div>
			    <div id="menu1" class="tab-pane fade">
			      <h4>Price List for House Depot Home Improvement Products</h4>
			     	<table class="table table-bordered">
				    <thead>
				      <tr>
				        <th>Product</th>
				        <th>Package</th>
				        <th>Price</th>
				      </tr>
				    </thead>
				    <tbody>
				     <tr>
				     <td>Lavertine Tiles</td>
				     <td>1 sq. ft. each<br/>16 per pack</td>
				     <td>$15</td>
				     </tr>
					<tr>
					<td>Trinoleum Tiles</td>
					<td>0.5 sq. ft. each<br/>16 per pack</td>
					<td>$10</td>
					</tr>
					<tr><td>Magic Color Paint</td>
					<td>32 sq. ft. worth<br/>per can</td>
					<td>$25</td>
					</tr>
					<tr><td>Rainbow Wallpaper</td>
					<td>16 sq. ft. per sheet<br/>10 sheets per pack</td>
					<td>$30</td>
					</tr>
					<tr>
					<td>Cloud Wallpaper</td>
					<td>10 sq. ft. per sheet<br/>8 sheets per pack</td>
					<td>$32</td>
					</tr>
					</tbody>
				  </table>
			    </div>
			    
			  
			  </div>

			</div>
					<div class="col-md-6">
							<br>
							<br>
							<br>
					<p><b>Marisa is considering improving her rectangular bathroom. She will either install new floor tiles, paint the walls or install new wallpaper. Her bathroom's 4 walls measure 10 ft high and 8 feet long. Assess the following statements as either True or false based on the information provided.</b></p>
					<form method="POST" action="q6.php">
						
					
					<table cellspacing="10">
					<tr>
						<td>Yes</td>
						<td>No</td>
						<td></td>
					</tr>
					<tr>
						<td><input type="radio" name="op1" id="op1" value="Yes"></td>
						<td><input type="radio" name="op1" id="op2" value="No"></td>
						<td><p>The cost of installing Trinoleum Tiles in Marisa's bathroom is $75.</p></td>
					</tr>
					<tr>
						<td><input type="radio" name="op2" id="op3" value="Yes"></td>
						<td><input type="radio" name="op2" id="op4" value="No"></td>
						<td><p>The pre-rebate cost of 2 coats of Magic Color Paint on the walls of Marisa's bathroom is $500.</p></td>
					</tr>
					<tr>
						<td><input type="radio" name="op3" id="op5" value="Yes"></td>
						<td><input type="radio" name="op3" id="op6" value="No"></td>
						<td><p>Marisa can cover her walls with Cloud Wallpaper for less than $100.</p></td>
					</tr>
					<tr>
						<td><input type="radio" name="op4" id="op7" value="Yes"></td>
						<td><input type="radio" name="op4" id="op8" value="No"></td>
						<td><p>The cost of covering the walls with Rainbow wallpaper is greater than the cost of installing Lavertine Tiles</p></td>
					</tr>
					<tr>
						<td><input type="radio" name="op5" id="op9" value="Yes"></td>
						<td><input type="radio" name="op5" id="op10" value="No"></td>
						<td><p>	If she chooses, Marisa can both wallpaper and re-tile her entire bathroom less expensively than she can paint it.</p></td>
					</tr>
				</table>
						
					</div>
			</div>
			
				<!--submit selection starts from here-->
			<center>
				<a class="btn btn-success" onclick="validate()">Submit</a>
				&nbsp;&nbsp;
				<button class="btn btn-info" id="mybtn" disabled >&nbsp;Next &nbsp;</button>
			</center>
				<!--submit selection ends here-->
				</form>
			</div>
			
	<script type="text/javascript">

	function validate()
	{
			var op1 = document.getElementById('op1');
			var op2 = document.getElementById('op2');
			var op3 = document.getElementById('op3');
			var op4 = document.getElementById('op4');
			var op5 = document.getElementById('op5');
			var op6 = document.getElementById('op6');
			var op7 = document.getElementById('op7');
			var op8 = document.getElementById('op8');
			var op7 = document.getElementById('op9');
			var op8 = document.getElementById('op10');	

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
		if(op9.checked == false && op10.checked == false)
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
			$op5=$_POST['op5'];

			if($op1=="True" && $op2=="True" && $op3=="True" && $op4=="True" && $op5=="True")
				{
					$result=$result+1;
					$_SESSION["result"]=$result;
					header('Location:q7.php');
				}
			else
			{
				$_SESSION["result"]=$result;
				header('Location:q7.php');
			}
		}

	?>

	<br>
	<br>
	<br>

	<!--Progess Bar Starts Here-->
		<div class="container">
				<div class="progress">
					
	    			<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:53%">
	     				 5 of 12 Complete
	    			</div>
				</div>
		</div>
	<!--Progess Bar ends Here-->
    </body>
</html>			

