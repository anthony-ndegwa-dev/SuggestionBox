<?php 

require_once("connect.php"); 

if(isset($_POST['submit'])) {
	//two passwords are similar
	if ($_POST['password'] == $_POST['confirmpassword']) {

		$username = $con->real_escape_string($_POST['username']);
		$email = $con->real_escape_string($_POST['email']);
		$password = md5($_POST['password']); //md5 hash password
				
		$_SESSION['name'] = $username;

		$sql = "INSERT INTO admin (name, email, password)" . "VALUES ('$username', '$email', '$password')";
		$result = mysqli_query($con,$sql);

		if ($result) {
			header("location: login.php");
		}
		else {
			echo "Didnt register";
		}
	}
	else {
		echo "Password dont match";
	}
}
?>