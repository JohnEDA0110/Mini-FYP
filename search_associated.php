<?php

//include "PDF.php";
include "db_connect.php";

$keywordfromform = $_GET["AS"];

$sql = "SELECT SCHEME, FINALPOST FROM final WHERE SCHEME LIKE '%" . $keywordfromform . "%'";
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
    width: 70%;
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
	
{
		letter-spacing: 1px;
		color: blue;
		font-size: 20px;
}

a:hover {
    background-color: #afafaf;
}
</style>

<div align="center">

<h1> Final Copy </h1>

<?php

if ($result->num_rows > 0)
{
    // output data of each row
	echo"<table border='1'>";
	echo"<tr><th>SCHEME</th><th>FINALPOST</th><tr>";
    while($row = $result->fetch_assoc())
{
   echo"<tr><td>{$row['SCHEME']}</td><td>{$row['FINALPOST']}</td></tr>";
}
	echo"</table>";
} 	
else
{
    echo "0 results";
}

?>

<br>

<a href="PDF.php" target="_blank">FINAL COPY</a>

<br>
<br>

<a href="index.php">Return to main page</a>

<?php

session_start();

$_SESSION['scheme'] = $keywordfromform;

?>

</div>
