<!DOCTYPE html>
<html>
<title>www.FYP.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>

<?php

include "db_connect.php";

?>

<div class="w3-sidebar w3-bar-block w3-black w3-card" style="width:125px">
  <h5 class="w3-bar-item">Menu</h5>
  <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Postal')">Postal Code Search</button>
  <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Final')">Final Copy</button>
  <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Cable')">Cable search</button>
</div>

<div style="margin-left:130px">
  <div class="w3-padding" align="center">Singapore Poly</div>

  <div id="Postal" class="w3-container city w3-animate-opacity" style="display:none">
	<form class="form-horizontal" action="search_postal.php">
	<fieldset>

	<!-- Form Name -->
	<legend align="center">Postal Code</legend>

	<!-- Search input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="keyword">Postal Code:</label>
	  <div class="col-md-4">
		<input id="keyword" name="keyword" type="search" placeholder="Eg: 000000" class="form-control input-md">
		<p class="help-block">Search Postal Code</p>
	  </div>
	</div>

	<!-- Button -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for=""></label>
	  <div class="col-md-4" align="center">
		<button class="btn btn-default">Search</button>
	  </div>
	</div>

	</fieldset>
	</form>
  </div>

  <div id="Final" class="w3-container city w3-animate-opacity" style="display:none">
	<form class="form-horizontal" action="search_associated.php">
	<fieldset>

	<!-- Form Name -->
	<legend align="center">Scheme</legend>

	<!-- Search input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="AS">Scheme No.:</label>
	  <div class="col-md-4">
		<input id="AS" name="AS" type="search" placeholder="Eg: G.1000...." class="form-control input-md">
		<p class="help-block">Search Scheme</p>
	  </div>
	</div>

	<!-- Button -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for=""></label>
	  <div class="col-md-4" align="center">
		<button class="btn btn-default">Search</button>
	  </div>
	</div>

	</fieldset> 
	</form>
  </div>
  
  <div id="Cable" class="w3-container city w3-animate-opacity" style="display:none">
	<form class="form-horizontal" action="search_cable.php">
	<fieldset>

	<!-- Form Name -->
	<legend align="center">Cables</legend>

	<!-- Search input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="scheme">Scheme No.:</label>
	  <div class="col-md-4">
		<input id="scheme" name="scheme" type="search" placeholder="Eg: G.1000...." class="form-control input-md">
		<p class="help-block">Search Scheme</p>
	  </div>
	</div>

	<!-- Button -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for=""></label>
	  <div class="col-md-4" align="center">
		<button class="btn btn-default">Search</button>
	  </div>
	</div>

	</fieldset>
	</form>
  </div>
</div>

<script>
function openLink(evt, animName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(animName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>

<?php

$mysqli->close();

?>

</body>
</html>
