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
			
<!--IR Question Example No 2 Starts from here-->
<div class="container">
		<div class="col-md-12">
	<div class="col-md-6">
		<b>Q11)</b>
			<form>
			<p><b>Sort By</b></p> 
				<select id="myselect" onchange="valuech();">
			 <option selected="selected" disabled="disabled">Select...</option>
		    	<option value="A">Brand</option>
				<option value="B">Type</option>
				<option value="C">Fragrance</option>
				<option value="D">Units</option>
				<option value="E">% Change Unit Sales</option>
				<option value="F">Dollars</option>
				<option value="G">% Change Dollar Sales</option>
				<option value="H">Average Price</option>
				<option value="I">$ Change</option>
		     </select>	
			</form>
				 <br>
				     <div id="img">
				     	<img src="images/ta/a.PNG" height="50%" width="70%" id="chimg">
				     	<div id="demo"></div>
				     </div>
                       <br>
     					<p>The table above gives sale information for the 20 bathroom cleaners in the United States in 2010. For each product, the table describes the brand of the product, the product type, fragrance, unit sales, percent change in unit sales since 2009, total dollar sales, percent change in dollar sales since 2009, average price of each unit sold, and the dollar change in price since 2009.</p>
		</div>
	
			<div class="col-md-6">
			<!--answer area-->
			<p>For each of the following statements, select <em>Yes</em> if the statement can be shown to be true based on the information in the table. Otherwise select <em>No</em> . </p>
			<form method="POST" action="q11.php">
				
			
			<table cellspacing="10">
				<tr>
					<td>Yes</td>
					<td>No</td>
					<td></td>
				</tr>
				
				<tr>
					<td><input type="radio" name="op1" id="op1" value="ans"></td>
					<td><input type="radio" name="op1" id="op2"></td>
					<td><p>Spray bathroom cleaners generated more dollar sales than any other single type of bathroom cleaner in 2010.&nbsp;</p></td>
				</tr>

				<tr>
					<td><input type="radio" name="op2" id="op3" value="ans"></td>
					<td><input type="radio" name="op2" id="op4"></td>
					<td><p>Half of the bathroom cleaners that experienced a drop in average price from 2009 to 2010 were aerosol cleaners.</p></td>
				</tr>
				<tr>
					<td><input type="radio" name="op3" id="op5" value="ans"></td>
					<td><input type="radio" name="op3" id="op6"></td>
					<td><p>Ultra Shine brand bathroom cleaners experienced greater total unit sales growth from 2009 to 2010 than did Deluxe brand bathroom cleaners..&nbsp;</p></td>
				</tr>
				<tr>
					<td><input type="radio" name="op4" id="op7" value="ans"></td>
					<td><input type="radio" name="op4" id="op8"></td>
					<td><p>	No orange-scented bathroom cleaner sold more units in 2009 than in 2010.&nbsp;</p></td>
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
			<button class="btn btn-info" id="mybtn" disabled>&nbsp;Next &nbsp;</button></center>
		</div>
		</form>
				<!--submit selection ends here-->
					
		<script type="text/javascript">
		function valuech()
		{
			  var x = document.getElementById("myselect").value;
		      if (x=="A") 
		      {
		      	//document.getElementById("demo").innerHTML="Value 1";
				document.getElementById("chimg").src="images/ta/a.PNG";

		      }
		      if (x=="B") 
		      {
		      	document.getElementById("chimg").src="images/ta/b.PNG";
		      }
		      if (x=="C") 
		      {
		      	document.getElementById("chimg").src="images/ta/c.PNG";
		      }
		      if (x=="D") 
		      {
		      	document.getElementById("chimg").src="images/ta/d.PNG";
		      }
		       if (x=="E") 
		      {
		        document.getElementById("chimg").src="images/ta/e.PNG";
		      }
		      if (x=="F") 
		      {
		        document.getElementById("chimg").src="images/ta/f.PNG";
		      }
		      if (x=="G") 
		      {
		        document.getElementById("chimg").src="images/ta/g.PNG";
		      }
		      if (x=="H") 
		      {
		        document.getElementById("chimg").src="images/ta/h.PNG";
		      }
		       if (x=="I") 
		      {
		        document.getElementById("chimg").src="images/ta/i.PNG";
		      }
		}

			function validate() 
			{
				op1=document.getElementById("op1");
				op2=document.getElementById("op2");
				op3=document.getElementById("op3");
				op4=document.getElementById("op4");
				op5=document.getElementById("op5");
				op6=document.getElementById("op6");
				op7=document.getElementById("op7");
				op8=document.getElementById("op8");

				if(op1.checked==false && op2.checked==false)
				{
					alert("Please Select All The option");
					return false;
				}
				if (op3.checked==false && op4.checked==false) 
				{
					alert("Please Select All The option");
					return false;
				}
				if (op5.checked==false && op6.checked==false)
				{
					alert("Please Select All The option");
					return false;
				}
				if(op7.checked==false && op8.checked==false)
				{
					alert("Please Select All The option");
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
			if($op1 == "ans" && $op2 == "ans" && $op3=="ans" && $op4=="ans")
				{
					$result=$result+1;
					$_SESSION["result"]=$result;
					header('Location:q12.php');
				}
				else
				{
					$_SESSION["result"]=$result;
					header('Location:q12.php');
				}
		}
		?>
			<br>
		<br>
		<br>
		<!--Progess Bar Starts Here-->
		<div class="container">
				<div class="progress">
					
	    			<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:93%">
	     				  10 of 12 Complete
	    			</div>
				</div>
		</div>
	<!--Progess Bar ends Here-->
    </body>
</html>			

