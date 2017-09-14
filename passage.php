<!DOCTYPE html>
<html>
<head>
	<title>GMAT|IR Section|Assignment</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<style type="text/css">
		#txt 
  {
  border:none;
  font-family:verdana;
  font-size:16pt;
  font-weight:bold;
  border-right-color:#FFFFFF
}

	</style>
	<script type="text/javascript">
		function validate()
		{
			
			var psg = document.getElementById('psg').value;
			if (psg=="") 
			{
				alert("Please Write An Passage");;
				return false;
			}
			else
			{
				document.getElementById("mybtn").disabled = false;
	
			}





		}
	</script>
</head>
 	<body>
		<div col-md-12>
			<div class="container">
			  <div class="jumbotron">
			    	<h2 class="text-center">Analytical Writing Assessment</h2>
			    	<h3 class="text-center">Set-2</h3>
			  </div>
			</div>
	<form name="cd" align="right">
    <input id="txt" readonly="true" type="text" value="30:00" border="0" name="disp">
    </form>
    
			
					<div class="container">
				
						<iframe src="./argument.php">
  							<p>Your browser does not support iframes.</p>
						</iframe>
					</div>

  					<div class="container">
  						<form method="POST" action="dbcon.php">
							<div class="form-group">
  								<label for="comment">Passage:</label>
  								<textarea class="form-control" rows="30" id="psg" name="psg"></textarea>
							</div>

							<center>
							<a class="btn btn-primary btn-md " onclick="validate()">&nbsp; &nbsp;Save &nbsp; &nbsp;</a>
							&nbsp;&nbsp;&nbsp;
							<input type="Submit" name="mybtn" id="mybtn" class="btn btn-primary btn-md " value="Submit" disabled> 
							</center>
							<br>
							<br>
						</form>

  					</div>
			</div>
   		 </div>
   		 <script type="text/javascript">
    var mins
    var secs;

function cd() {
  mins = 1 * m("30"); // change minutes here
  secs = 0 + s(":01"); // change seconds here (always add an additional second to your total)
  redo();
}

function m(obj) {
  for(var i = 0; i < obj.length; i++) {
      if(obj.substring(i, i + 1) == ":")
      break;
  }
  return(obj.substring(0, i));
}

function s(obj) {
  for(var i = 0; i < obj.length; i++) {
      if(obj.substring(i, i + 1) == ":")
      break;
  }
  return(obj.substring(i + 1, obj.length));
}

function dis(mins,secs) {
  var disp;
  if(mins <= 9) {
      disp = " 0";
  } else {
      disp = " ";
  }
  disp += mins + ":";
  if(secs <= 9) {
      disp += "0" + secs;
  } else {
      disp += secs;
  }
  return(disp);
}

function redo() {
  secs--;
  if(secs == -1) {
      secs = 59;
      mins--;
  }
  document.cd.disp.value = dis(mins,secs); // setup additional displays here.
  if((mins == 0) && (secs == 0)) {
      window.alert("Time is up. Press OK to continue."); // change timeout message as required
      // window.location = "yourpage.htm" // redirects to specified page once timer ends and ok button is pressed
  } else {
    cd = setTimeout("redo()",1000);
  }
}

function init() {
  cd();
}
window.onload = init;

  </script>

   		
	</body>
</html>    
