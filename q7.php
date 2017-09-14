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
			<p><b>Q7) &nbsp;</b>Work crews Alpha and Zeta are repaving a section of freeway in Los Angeles. Work crew Alpha started its work one week (40 working hours) earlier than work crew Zeta, and started on the north end of the freeway, working its way south at a rate of 12 meters per hour since starting the job. Now, work crew Zeta has started at the south end, working its way north at a rate of 10 meters per hour. The section of freeway that needs to be repaved is 1.5 kilometers long, including the section that has already been paved. </p><br>

            <p>Given that each crew will not necessarily work the same number of hours, which of the following answer choices represents an hourly workload for each crew that will finish the project? Please make only one selection in each column.</p>
            <hr>
            <form method="POST" action="q7.php">
            <div class="col-md-5">
            		<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Crew Alpha</th>
			        <th>Crew Zeta</th>
			        <th>Number Of Hours</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td><input type="radio" name="alpha" id="op1" value="10"></td>
			        <td><input type="radio" name="zeta" id="op2" value="10"></td>
			        <td>10</td>
			      </tr>
			      <tr>
			        <td><input type="radio" name="alpha" id="op3" value="20"></td>
			        <td><input type="radio" name="zeta" id="op4" value="20"></td>
			        <td>20</td>
			      </tr>
			      <tr>
			        <td><input type="radio" name="alpha" id="op5" value="30"></td>
			        <td><input type="radio" name="zeta" id="op6" value="30"></td>
			        <td>30</td>
			      </tr>
			      <tr>
			        <td><input type="radio" name="alpha" id="op7" value="40"></td>
			        <td><input type="radio" name="zeta" id="op8" value="40"></td>
			        <td>40</td>
			      </tr>
			      <tr>
			        <td><input type="radio" name="alpha" id="op9" value="50"></td>
			        <td><input type="radio" name="zeta" id="op10" value="50"></td>
			        <td>50</td>
			      </tr>
			      <tr>
			        <td><input type="radio" name="alpha" id="op11" value="60"></td>
			        <td><input type="radio" name="zeta" id="op12" value="60"></td>
			        <td>60</td>
			      </tr>
			    </tbody>
			  </table>	
            </div>
            
	</div>
			
				<!--submit selection starts from here-->
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<a class="btn btn-success" onclick="validate()">Submit</a>
			&nbsp;&nbsp;
			<button class="btn btn-info" id="mybtn" disabled >&nbsp;Next &nbsp;</button>
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
				op11=document.getElementById("op11");
				op12=document.getElementById("op12");

				if(op1.checked==false && op3.checked==false && op5.checked==false && op7.checked==false && op9.checked==false && op11.checked==false)
				{
					alert("Please Select All the Options");
					return false;
				}
				if (op2.checked==false && op4.checked==false && op6.checked==false && op8.checked==false && op10.checked==false && op12.checked==false ) 
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
	error_reporting(E_ALL);
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$op1=$_POST['alpha'];
		$op2=$_POST['zeta'];
		if($op1 == "10" && $op2 == "10")
		{
					$result=$result+1;
					$_SESSION["result"]=$result;
					header("Location: q8.php");
					ob_end_flush();
		}
		else
		{
				$_SESSION["result"]=$result;
				header("Location: q8.php");
					ob_end_flush();
		}
	}
	
	ob_end_flush();
	?>
		<br>
		<br>
		<br>
		<!--Progess Bar Starts Here-->
		<div class="container">
				<div class="progress">
					
	    			<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:63%">
	     				 6 of 12 Complete
	    			</div>
				</div>
		</div>
	<!--Progess Bar ends Here-->
    </body>
</html>			

