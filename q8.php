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
			<p><b>Q8) &nbsp;</b>Two companies are competing with one another for a contract to provide work uniforms to a customer, which is a large global manufacturing business. Company A sells its uniforms for $25 per uniform, and Company B's price is $30 per uniform. Both companies sell their uniforms in lots of 5,000 each. The customer has considered ordering some uniforms from both companies, in order to test them out before committing to one company on an ongoing basis. The company wants to spend exactly $1,000,000 on the test purchase. 
			<br>
			<br>

			In the table below, identify the number of uniforms that the customer should buy from Company A and from Company B so that the customer spends exactly $1,000,000. Make only one selection in each column.
			</p>
            <hr>
            <div class="col-md-5">
            <form method="POST" action="q8.php">
            	
            
            		<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Company A</th>
			        <th>Company B</th>
			        <th>Number of Uniforms</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td><input type="radio" name="a" id="op1" value="5000"></td>
			        <td><input type="radio" name="b" id="op2" value="5000"></td>
			        <td>5,000</td>
			      </tr>
			      <tr>
			        <td><input type="radio" name="a" id="op3" value="10000"></td>
			        <td><input type="radio" name="b" id="op4" value="10000"></td>
			        <td>10,000</td>
			      </tr>
			      <tr>
			        <td><input type="radio" name="a" id="op5" value="15000"></td>
			        <td><input type="radio" name="b" id="op6" value="15000"></td>
			        <td>15,000</td>
			      </tr>
			      <tr>
			        <td><input type="radio" name="a" id="op7" value="25000"></td>
			        <td><input type="radio" name="b" id="op8" value="25000"></td>
			        <td>25,000</td>
			      </tr>
			      <tr>
			        <td><input type="radio" name="a" id="op9" value="30000"></td>
			        <td><input type="radio" name="b" id="op10" value="30000"></td>
			        <td>30,000</td>
			      </tr>
			      <tr>
			        <td><input type="radio" name="a" id="op11" value="40000"></td>
			        <td><input type="radio" name="b" id="op12" value="40000"></td>
			        <td>40,000</td>
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
</form>
				<!--submit selection ends here-->
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
		error_reporting(E_ERROR | E_PARSE);
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$op1=$_POST['a'];
		$op2=$_POST['b'];
		if($op1 == "5000" && $op2 == "5000")
		{
					$result=$result+1;
					$_SESSION["result"]=$result;
					header('Location:q9.php');
		}
		else
		{
				$_SESSION["result"]=$result;
				header('Location:q9.php');
		}
	}
	?>

		<br>
		<br>
		<br>
		<!--Progess Bar Starts Here-->
		<div class="container">
				<div class="progress">
					
	    			<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:68%">
	     				 7 of 12 Complete
	    			</div>
				</div>
		</div>
	<!--Progess Bar ends Here-->

    </body>
</html>			

