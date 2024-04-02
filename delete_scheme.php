<?php

include "db_connect.php";
$old_scheme = $_GET["schemed"];

$sql = "DELETE FROM postal WHERE SCHEME= '$old_scheme' ";
$result = $mysqli->query($sql) or die("FAILED");

?>

<h1> Scheme deleted </h1>

<a href="index.php">Return to main page</a>