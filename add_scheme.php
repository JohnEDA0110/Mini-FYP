<?php

include "db_connect.php";
$postal_code = $_GET["postalcode"];
$new_scheme = $_GET["newscheme"];

$sql = "INSERT INTO postal (POSTAL, SCHEME) VALUES ('$postal_code', '$new_scheme')";
$result = $mysqli->query($sql);

?>

<h1> Scheme Updated </h1>

<a href="index.php">Return to main page</a>