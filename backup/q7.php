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
			<p><b>Q4) &nbsp;</b>Work crews Alpha and Zeta are repaving a section of freeway in Los Angeles. Work crew Alpha started its work one week (40 working hours) earlier than work crew Zeta, and started on the north end of the freeway, working its way south at a rate of 12 meters per hour since starting the job. Now, work crew Zeta has started at the south end, working its way north at a rate of 10 meters per hour. The section of freeway that needs to be repaved is 1.5 kilometers long, including the section that has already been paved. </p><br>

            <p>Given that each crew will not necessarily work the same number of hours, which of the following answer choices represents an hourly workload for each crew that will finish the project? Please make only one selection in each column.</p>
            <hr>
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
			        <td><input type="radio" name="alpha"></td>
			        <td><input type="radio" name="zeta"></td>
			        <td>10</td>
			      </tr>
			      <tr>
			        <td><input type="radio" name="alpha"></td>
			        <td><input type="radio" name="zeta"></td>
			        <td>20</td>
			      </tr>
			      <tr>
			        <td><input type="radio" name="alpha"></td>
			        <td><input type="radio" name="zeta"></td>
			        <td>30</td>
			      </tr>
			      <tr>
			        <td><input type="radio" name="alpha"></td>
			        <td><input type="radio" name="zeta"></td>
			        <td>40</td>
			      </tr>
			      <tr>
			        <td><input type="radio" name="alpha"></td>
			        <td><input type="radio" name="zeta"></td>
			        <td>50</td>
			      </tr>
			      <tr>
			        <td><input type="radio" name="alpha"></td>
			        <td><input type="radio" name="zeta"></td>
			        <td>60</td>
			      </tr>
			    </tbody>
			  </table>	
            </div>
            
	</div>
					
				<!--submit selection starts from here-->
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<button class="btn" onclick="myfun()">Submit</button>&nbsp;&nbsp;<button class="btn btn-info" id="mybtn" disabled onclick="window.location.href='./result.php'">&nbsp;Next &nbsp;</button>
				<!--submit selection ends here-->
	<script type="text/javascript">

	function myfun(argument) {
		document.getElementById("mybtn").disabled = false;
	}
		
	</script>
    </body>
</html>			

