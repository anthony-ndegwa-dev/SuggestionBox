<?php 
session_start();

require_once("connect.php");

if (isset($_POST['submit'])) {
   $username = $_POST['username'];
   $password = md5($_POST['password']);

   $sql = "SELECT * FROM admin WHERE name = '".$username."' AND password = '".$password."'";
   $result = mysqli_query($con,$sql);

   if(mysqli_num_rows($result)==1){
      $_SESSION['name'] = $username;
      header('Location: admin.php');
      exit();
   }
   
else{
      $_SESSION['message'] = "Wrong username and password";   
      header("location: login.php");   
      exit();
}

}
?>
