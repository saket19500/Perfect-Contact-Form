<?php
if(!empty($_POST["submit"])) {
	$userName = $_POST["name"];
    $userEmail = $_POST["email"];
	$userPhone = $_POST["phoneNumber"];
	$userMessage = $_POST["message"];
    $userSubject = $_POST["subject"];
	$toEmail = "test@techsolvitservice.com";
  
	$mailHeaders = "Name: " . $userName .
	"\r\n Email: ". $userEmail  . 
	"\r\n Phone: ". $userPhone  .
    "\r\n Subject: ". $userSubject  . 
	"\r\n Message: " . $userMessage . "\r\n";

	if(mail($toEmail, $userName, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	}
}
?>