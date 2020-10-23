<!-- Start php -->
<?php

// error reporting

ini_set('display_errors',1);  
error_reporting(E_ALL);


// Check if "submit" (a post thing) is set
if (isset($_POST["submit"])) {
	// create variable "name" from "name" from POST
	$name = $_POST["name"];
	$mailFrom = $_POST["mail"];
	$message = $_POST["message"];

	
	$mailTo = "sdjknights@hotmail.com"
	$headers = "From: ".$mailFrom;
		// /n = line break
	$txt = "You have received an email from ".$name.".\n\n".$message;


	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.html?mailsend");
}