<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#myDIV {
    width: 100%;
    padding: 1px, 1px;
    text-align: center;
    background-color: white;
    margin-top: 1px;
	font-size: 15px;
	display:none;
}

td {    
    text-align: center;
}
th{
	border-bottom: 2px solid
}

table {
    border-collapse: collapse;
    width: 30%;
}

tr:nth-child(odd) {background-color: #f2f2f2;}

button {
	border-radius: 4px;
	width: 150px;
	border: 1px solid;
}

input {
	border-radius: 4px;
	width: 150px;
	border: 1px solid;
}

button:hover {
    background-color: #afafaf;
	cursor: pointer;
	transition-duration: 0.7s;
}
	
a{
		letter-spacing: 1px;
		color: blue;
		font-size: 20px;
}

a:hover {
    background-color: #afafaf;
}
</style>

<style>
#myVID {
    width: 100%;
    padding: 1px, 1px;
    text-align: center;
    background-color: white;
    margin-top: 1px;
	font-size: 15px;
	display:none;
}

td {    
    text-align: center;
}
th{
	border-bottom: 2px solid
}

table {
    border-collapse: collapse;
    width: 30%;
}

tr:nth-child(odd) {background-color: #f2f2f2;}

button {
	border-radius: 4px;
	width: 150px;
	border: 1px solid;
}

button:hover {
    background-color: #afafaf;
	cursor: pointer;
	transition-duration: 0.7s;
}
	
a{
		letter-spacing: 1px;
		color: blue;
		font-size: 20px;
}

a:hover {
    background-color: #afafaf;
}
</style>

<div align="center">

<?php

include "db_connect.php";
$keywordfromform = $_GET["keyword"];

$sql = "SELECT POSTAL, SCHEME FROM postal WHERE POSTAL LIKE '%" . $keywordfromform . "%'";
$result = $mysqli->query($sql);

?>

<h1> Schemes from postal code </h1>

<?php

if ($result->num_rows > 0)
{
    // output data of each row
	echo"<table border='1'>";
	echo"<tr><th>POSTAL</th><th>SCHEME</th></tr>";
    while($row = $result->fetch_assoc())
{
   echo"<tr><td>{$row['POSTAL']}</td><td>{$row['SCHEME']}</td></tr>";
}
	echo"</table>";
} 	
else
{
    echo "0 results";
}

?>

<br>
<hr>

<button onclick="myFunction()">Add scheme</button>
<div id="myDIV">
<h2> Add new scheme </h2>
<form action="add_scheme.php">
  Postal Code:<br>
  <input type="text" name="postalcode"><br>
  New Scheme No.:<br>
  <input type="text" name="newscheme"><br><br>
  <input type="submit" value="Add scheme">
</form>
</div>

<hr>

<button onclick="yourFunction()">Delete scheme</button>
<div id="myVID">
<h2> Remove scheme </h2>
<form action="delete_scheme.php">
  Scheme No.:<br>
  <input type="text" name="schemed"><br><br>
  <input type="submit" value="Delete scheme">
</form>
</div>

</div>

<hr>

<a href="index.php">Return to main page</a>

<script>
function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
</script>

<script>
function yourFunction() {
    var x = document.getElementById("myVID");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
</script>