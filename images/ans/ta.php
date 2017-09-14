<!DOCTYPE html>
<html>
<head>
	<title>GMAT|IR Section|Assignment</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>


</head>
<body>
	<div class="jumbotron"><h2 class="text-center">Table Analysis</h2></div>

<!--IR Question Example No 2 Starts from here-->
<p>The table displays data on <em>Brazilian agricultural</em> products in 2009. </p>
  
<div class="col-md-6">
	<form>
		<select id="myselect" onchange="valuech();">
	 <option selected="selected" disabled="disabled">Select...</option>
     <option value="A">Commodity</option>
     <option value="B">Production, world share (%)</option>
     <option value="C">Production, world rank</option>
     <option value="D">Exports, world share (%)</option>
     <option value="E">Exports, world rank</option>
     </select>	
	</form>
	<p><b>Sort By</b></p> 
	
     <br>
     <br>
     <br>
     <div id="img">
     	<img src="2.jpg" height="50%" width="50%" id="chimg">
     	<div id="demo"></div>
     </div>
</div>
	
<div class="col-md-6">
<!--answer area-->
<p>For each of the following statements, select <em>Yes</em> if the statement can be shown to be true based on the information in the table. Otherwise select <em>No</em> . </p>
<table cellspacing="10">
	<tr>
		<td>Yes</td>
		<td>No</td>
		<td></td>
	</tr>
	
	<tr>
		<td><input type="radio" name="option1"></td>
		<td><input type="radio" name="option1"></td>
		<td><p>No individual country produces more than one-fourth of the world’s sugar.&nbsp;</p></td>
	</tr>

	<tr>
		<td><input type="radio" name="option2"></td>
		<td><input type="radio" name="option2"></td>
		<td><p>If Brazil produces less than 20% of the world’s supply of any commodity listed in the table, Brazil is not the world’s top exporter of that commodity.</p></td>
	</tr>
	<tr>
		<td><input type="radio" name="option3"></td>
		<td><input type="radio" name="option3"></td>
		<td><p>Of the commodities in the table for which Brazil ranks first in world exports, Brazil produces more than 20% of the world’s supply.&nbsp;</p></td>
	</tr>
</table>
	
</div>
  
<!--IR Question Example No 2 Ends Here-->


<script type="text/javascript">
function valuech()
{
	  var x = document.getElementById("myselect").value;
      if (x==="A") 
      {
      	//document.getElementById("demo").innerHTML="Value 1";
		document.getElementById("chimg").src="ima";

      }
      if (x=="B") 
      {

      }
      if (x=="C") 
      {

      }
      if (x=="D") 
      {

      }
       if (x=="E") 
      {

      }
}
	
</script>
</body>
</html>