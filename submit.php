<?php

require_once("connect.php");

session_start();
$_SESSION['message'] = '';

if (isset($_POST['submit'])) {
	$matter = $con->real_escape_string($_POST['matter']);
	$department = $con->real_escape_string($_POST['department']);
	$yourdate = $con->real_escape_string($_POST['yourdate']);
	$towards = $con->real_escape_string($_POST['towards']);
	$message = $con->real_escape_string($_POST['message']);
	
	$_SESSION['motter'] = $matter;	
	
	$sql = "INSERT INTO sug (matter, department, yourdate, towards, message)" . "VALUES ('$matter', '$department', '$yourdate', '$towards', '$message')";
	$result = mysqli_query($con,$sql);

	if ($result) {
		header("location: index.php");
	}

	else {
		echo "Not submited";
	}
}

?>