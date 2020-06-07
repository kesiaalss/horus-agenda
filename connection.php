<?php 
// Conecta-se com o MySQL 
$db = mysqli_connect("localhost", "root", "", "horus"); 

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>