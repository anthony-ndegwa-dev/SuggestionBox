<?php

include_once('connect.php');

$Id = $_GET["id"];
$sql = "DELETE FROM sug WHERE id='".$Id."'";
$result = mysqli_query($con,$sql);

if ($result)
{
	header("location: admin.php");
}
else
{
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>