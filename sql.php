<?php
include_once('validate.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";
$conn = new mysqli($servername,
	$username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}
if(isset($_POST["submit"])) {
	$userName = $_POST["name"];
	$userPhone = $_POST["phoneNumber"];
    $userEmail = $_POST["email"];
	$userMessage = $_POST["message"];
    $userSubject = $_POST["subject"];
    $useripAddress = getenv("REMOTE_ADDR");
}
$sql = "INSERT INTO details VALUES ('$userName', $userPhone, '$userEmail', '$userSubject', '$userMessage', '$useripAddress', now())";
      if ($conn->query($sql) === TRUE) {
	echo "record inserted successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>