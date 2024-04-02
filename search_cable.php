<?php

include "db_connect.php";
$keywordfromform = $_GET["scheme"];

$sql = "SELECT CABLE, SCHEME FROM cable WHERE SCHEME LIKE '%" . $keywordfromform . "%'";
$result = $mysqli->query($sql);

?>

<style>
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

<h1> Cables from scheme </h1>

<hr>

<?php



if ($result->num_rows > 0)
{
    // output data of each row
	echo"<table border='1'>";
	echo"<tr><th>CABLE</th><th>SCHEME</th><tr>";
    while($row = $result->fetch_assoc())
{
   echo"<tr><td>{$row['CABLE']}</td><td>{$row['SCHEME']}</td></tr>";
}
	echo"</table>";
} 	
else
{
    echo "0 results";
}

?>

<hr>

<a href="index.php">Return to main page</a>

</div>