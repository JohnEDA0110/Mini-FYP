<?php

  session_start();
  
  $keywordfromform = $_SESSION['scheme'];
  
  header('Content-type: application/pdf');
  header('Content-Disposition: inline; filename="' . $keywordfromform . ".pdf" .'"');
  header('Content-Transfer-Encoding: binary');
  header('Accept-Ranges: bytes');
  @readfile($keywordfromform.".pdf");
  
?>