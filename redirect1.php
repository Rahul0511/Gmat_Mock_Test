<!DOCTYPE html>
<html>
<head>
	<title>Waiting Page For The Student</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript">
    var mins
    var secs;

function cd() {
  mins = 1 * m("10"); // change minutes here
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
      window.location.href= './index.php';// change timeout message as required
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
  <style type="text/css">
  	input
  	{

  	}
  </style>
</head>
<body>		<br>
			<br>
			<br>

		<div class="container">
				<h2 class="text-center">Please Wait For 10 Min </h2>
					<center>
						<form name="cd">
    					<input id="txt" readonly="true" type="text" value="30:00" border="0" name="disp" class="btn btn-info">
    					</form>
    				</center>
					<h3 class="text-center">Or Click Below Button to start the next section</h3>
					
    				
    				<br>
    				<br>


				<center><button class="btn btn-info" id="mybtn" onclick="direct()">
					Next Section
				</button>	
				</center>

		</div>



		<script type="text/javascript">
			
				function direct()
				 {
					window.location.href= './index.php';
				}

		</script>

</body>
</html>
