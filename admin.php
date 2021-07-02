<?php
	require_once("connect.php");
	$sql = "SELECT * FROM sug ORDER BY id DESC";
	$result = mysqli_query($con,$sql);
?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Suggestion Box</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	

<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			
			<form class="contact100-form validate-form" method="post" action="submit.php" autocomplete="off">
				<div class="pedi">
					<p><a href="register.php">Register New Admin</a></p>
					<p>Admin: <?php echo $_SESSION['name']; ?></p>
				</div>
								
				<div class="container-contact100-form-btn">
					<a href="index.php" class="contact100-form-btn">Admin logout</a><br>			
				</div>
				<div>
					<p>Complements, Complaints and Suggestions</p><br>
				</div>
				
				
				    <span style="color:green">
				    <?php if(isset($_GET['msg']))
				    echo $_GET['msg'];
				    ?>
				    	
				    </span>
				    <span style="color:red">
				    <?php if(isset($_GET['err']))
				    echo $_GET['err'];
				    ?>
				    	
				    </span>

				<table class="major">
						<tr class="brick">
						<th>Matter</th>
						<th>Department</th>
						<th>Date</th>
						<th>Towards</th>
						<th>Message</th>
						<th>Action</th>
						<th></th>
						</tr>
						<?php
						
						while($row = mysqli_fetch_array($result)) {
						
						?>
						<tr>
						<tr class="mino">
						<td><?php echo $row["matter"]; ?></td>
						<td><?php echo $row["department"]; ?></td>
						<td><?php echo $row["yourdate"]; ?></td>
						<td><?php echo $row["towards"]; ?></td>
						<td><textarea class="teco"><?php echo $row["message"]; ?></textarea></td>
						<td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
						</tr>
						</tr>
						<?php
						
						}
						?>
					</table>
			</form>

			<div class="contact100-more flex-col-c-m bg-dark" >

				
			</div>
		</div>
	</div>

</body>
</html>