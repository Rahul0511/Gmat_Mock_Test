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
			    	<h2 class="text-center">Two-Part Analysis</h2>
			  </div>
			</div>
	</div>
			
	<div class="container">
			<p><b>Q9) &nbsp;</b><b>Joseph:</b> Health insurance premiums are growing at an alarming rate. This is, in part, because many hospitals and clinics bill for unnecessary diagnostics and tests that inflate the subsequent amount that insurers pay out to them. These expenses are then passed on to consumers in the form of increased insurance premiums. Therefore, reducing the number of unnecessary tests performed by health care providers will be effective in controlling growing health insurance premiums.
			<br>
			<br> 

			<b>Ronald:</b> Often times, the unnecessary diagnostics that you speak of are the result of decisions made by doctors on behalf of their patients. Doctors will often choose the diagnostics that will allow them to bill insurers for more money, but may not be necessarily benefit the patient in a meaningful way or influence the course of treatment chosen. As a result, in order to succeed in reducing the number of unnecessary tests, we should allow the patient to decide which course of diagnostics they would like to undergo. 
			<br>
			<br>
			In the table below, identify the assumptions upon which each person's argument depends. Make only one selection in each column, one for Joseph and one for Ronald.
            <hr>
            <div class="col-md-5">
            <form method="POST" action="q9.php">
            	
            
            		<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Joseph</th>
			        <th>Ronald</th>
			        <th>Assumptions</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td><input type="radio" name="a" id="op1" value="ans"></td>
			        <td><input type="radio" name="b" id="op2" value="ans"></td>
			        <td>Doctors are generally able to determine, with great reliability, which diagnostic procedures and tests would yield the most effective results.</td>
			      </tr>
			      <tr>
			        <td><input type="radio" name="a" id="op3"></td>
			        <td><input type="radio" name="b" id="op4"></td>
			        <td>Tests and diagnostic procedures do not make up an insignificant portion of the bills that are sent to insurers.</td>
			      </tr>
			      <tr>
			        <td><input type="radio" name="a" id="op5"></td>
			        <td><input type="radio" name="b" id="op6"></td>
			        <td>Insurance companies in other industries such as auto and home, have been able to reduce costs by reducing the number of unnecessary repairs and replacements on claims for automobiles and homes.</td>
			      </tr>
			      <tr>
			        <td><input type="radio" name="a" id="op7"></td>
			        <td><input type="radio" name="b" id="op8"></td>
			        <td>Patients are not just as likely as doctors to choose the most expensive diagnostics and tests.</td>
			      </tr>
			      <tr>
			        <td><input type="radio" name="a" id="op9"></td>
			        <td><input type="radio" name="b" id="op10"></td>
			        <td>Health insurance premiums have increased twice as fast in the past 5 years than they have over an average of the past 25 years.</td>
			      </tr>
			      </tbody>
			  </table>	
            </div>
            
	</div>
					
				<!--submit selection starts from here-->
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	<a class="btn btn-success" onclick="validate();">Submit</a>
	&nbsp;&nbsp;
	<button class="btn btn-info" id="mybtn" disabled>&nbsp;Next &nbsp;</button>
				<!--submit selection ends here-->
	</form>
	<script type="text/javascript">
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
				op9=document.getElementById("op9");
				op10=document.getElementById("op10");
				//op11=document.getElementById("op11");
				//op12=document.getElementById("op12");

				if(op1.checked==false && op3.checked==false && op5.checked==false && op7.checked==false && op9.checked==false)
				{
					alert("Please Select All the Options");
					return false;
				}
				if (op2.checked==false && op4.checked==false && op6.checked==false && op8.checked==false && op10.checked==false) 
				{
					alert("Please Select All the Options");
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
		$op1=$_POST['a'];
		$op2=$_POST['b'];
		if($op1 == "ans" && $op2 == "ans")
		{
					$result=$result+1;
					$_SESSION["result"]=$result;
					header('Location:q10.php');
		}
		else
		{
				$_SESSION["result"]=$result;
				header('Location:q10.php');
		}
	}
	?>
		<br>
		<br>
		<br>
		<!--Progess Bar Starts Here-->
		<div class="container">
				<div class="progress">
					
	    			<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:73%">
	     				 8 of 12 Complete
	    			</div>
				</div>
		</div>
	<!--Progess Bar ends Here-->

    </body>
</html>			

