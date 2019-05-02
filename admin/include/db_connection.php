<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "blood_bank");

$connection=mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

// Connection varification------
if(mysqli_connect_errno()){
	die("database connection failed: ".mysqli_connect_error()."(".mysqli_connect_errno().")");
}
?>