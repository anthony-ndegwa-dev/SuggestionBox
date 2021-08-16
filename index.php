<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Suggestion Box</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" action="submit.php" autocomplete="off">
				<h4>Suggestion Box</h4>
				
				<div class="container-contact100-form-btn">
					<a href="login.php" class="contact100-form-btn">Admin Login</a>			
				</div>
				    

				<label class="label-input100">Matter</label>
				<div class="wrap-input100 validate-input" >
					<select name="matter" required>
						<option>Suggestion</option>
						<option>Complaint</option>
						<option>Complement</option>
					</select>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="first-name">Choose Your Department and Date</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input"><br>
					<select name="department" required>
						<option>Management</option>
						<option>Staff</option>
						<option>Subordinate Staff</option>
					</select>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input">
					<input class="input100" type="date" name="yourdate" required>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100">Towards</label>
				<div class="wrap-input100 validate-input" >
					<select name="towards">
						<option>Management</option>
						<option>Staff</option>
						<option>Subordinate Staff</option>
						<option>Apply To All</option>
					</select>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="message">Your Metter </label>
				<div class="wrap-input100 validate-input">
					<textarea id="message" class="input100" name="message" placeholder="Write Here" required></textarea>
					<span class="focus-input100"></span>
				</div>
			
					<button class="btn btn-primary" name="submit">
						Submit
					</button>
				
			</form>
				
			</div>
		</div>
</body>
</html>
