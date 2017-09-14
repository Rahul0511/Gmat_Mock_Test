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
			    	<h2 class="text-center">Table Analysis</h2>
			  </div>
			</div>
	</div>
			

 <div class="container">
	<div class="col-md-12">
		
			<div class="col-md-6">
			<!--IR Question Example No 2 Starts from here-->
<p><b>Q10)</b>The table displays data on <em>Brazilian agricultural</em> products in 2009. </p>
	<form>
	<p><b>Sort By</b></p> 
		<select id="myselect" onchange="valuech();">
	 <option selected="selected" disabled="disabled">Select...</option>
     <option value="A">Commodity</option>
     <option value="B">Production, world share (%)</option>
     <option value="C">Production, world rank</option>
     <option value="D">Exports, world share (%)</option>
     <option value="E">Exports, world rank</option>
     </select>	
	</form>
	
	
     <br>
     <br>
     <br>
     <div id="img">
     	<img src="images/ex2/1.gif" height="50%" width="50%" id="chimg">
     	<div id="demo"></div>
     </div>
</div> 	
 


		<div class="col-md-6">
<!--answer area-->
<p>For each of the following statements, select <em>Yes</em> if the statement can be shown to be true based on the information in the table. Otherwise select <em>No</em> . </p>
<form method="POST" action="q10.php">
	

<table cellspacing="10">
	<tr>
		<td>Yes</td>
		<td>No</td>
		<td></td>
	</tr>
	
	<tr>
		<td><input type="radio" name="op1" id="op1" value="ans"></td>
		<td><input type="radio" name="op1" id="op2" value="ans"></td>
		<td><p>No individual country produces more than one-fourth of the world’s sugar.&nbsp;</p></td>
	</tr>

	<tr>
		<td><input type="radio" name="op2" id="op3" value="ans"></td>
		<td><input type="radio" name="op2" id="op4"></td>
		<td><p>If Brazil produces less than 20% of the world’s supply of any commodity listed in the table, Brazil is not the world’s top exporter of that commodity.</p></td>
	</tr>
	<tr>
		<td><input type="radio" name="op3" id="op5" value="ans"></td>
		<td><input type="radio" name="op3" id="op6"></td>
		<td><p>Of the commodities in the table for which Brazil ranks first in world exports, Brazil produces more than 20% of the world’s supply.&nbsp;</p></td>
	</tr>
</table>
	
</div>
  
</div>	




	</div>
		

<!--IR Question Example No 2 Ends Here-->
				<!--submit selection starts from here-->
	<div class="col-md-12">
		<center>
			<a class="btn btn-success" onclick="validate();">Submit</a>
				&nbsp;&nbsp;
			<button class="btn btn-info" id="mybtn" disabled>&nbsp;Next &nbsp;</button>
		</center>
	</div>
				<!--submit selection ends here-->
					
		<script type="text/javascript">
		function valuech()
		{
			  var x = document.getElementById("myselect").value;
		      if (x=="A") 
		      {
		      	//document.getElementById("demo").innerHTML="Value 1";
				document.getElementById("chimg").src="http://www.mba.com/~/media/Images/mba/TheGMAT/NextGenGMAT/GID0621.gif?la=en";

		      }
		      if (x=="B") 
		      {
		      	document.getElementById("chimg").src="http://www.mba.com/~/media/Images/mba/TheGMAT/NextGenGMAT/GID0622.gif?la=en";
		      }
		      if (x=="C") 
		      {
		      	document.getElementById("chimg").src="http://www.mba.com/~/media/Images/mba/TheGMAT/NextGenGMAT/GID0623.gif?la=en";
		      }
		      if (x=="D") 
		      {
		      	document.getElementById("chimg").src="http://www.mba.com/~/media/Images/mba/TheGMAT/NextGenGMAT/GID0624.gif?la=en";
		      }
		       if (x=="E") 
		      {
		        document.getElementById("chimg").src="http://www.mba.com/~/media/Images/mba/TheGMAT/NextGenGMAT/GID0625.gif?la=en";
		      }
		}

			//function for validattion starts from here

			function validate() 
			{
				op1=document.getElementById("op1");
				op2=document.getElementById("op2");
				op3=document.getElementById("op3");
				op4=document.getElementById("op4");
				op5=document.getElementById("op5");
				op6=document.getElementById("op6");
				if (op1.checked ==false && op2.checked == false )
				{
						alert("Please Select All option");
						return false;

				 }
				 if (op3.checked ==false && op4.checked == false )
				{
						alert("Please Select All option");
						return false;

				 }
				  if (op5.checked ==false && op6.checked == false )
				{
						alert("Please Select All option");
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

			if($op1 == "ans" && $op2 == "ans" && $op3=="ans")
				{
					$result=$result+1;
					$_SESSION["result"]=$result;
					header('Location:q11.php');
				}
				else
				{
					$_SESSION["result"]=$result;
					header('Location:q11.php');
				}
		}

		?>
		<br>
		<br>
		<br>
		<br>
		<br>
		<!--Progess Bar Starts Here-->
		<div class="container">
				<div class="progress">
					
	    			<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:83%">
	     				 9 of 12 Complete
	    			</div>
				</div>
		</div>
	<!--Progess Bar ends Here-->
    </body>
</html>			

