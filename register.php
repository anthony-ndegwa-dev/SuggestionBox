<!DOCTYPE html>
<html lang="en">
<head>
  <title>Suggestion Box</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

<!--===============================================================================================-->
</head>
<body>


  <div class="container-contact100">
    <div class="wrap-contact100">
      <form class="contact100-form validate-form" method="post" action="registering.php" autocomplete="off">
        <h4>Register Admin</h4>
        
        <div class="container-contact100-form-btn">
          <a href="admin.php" class="contact100-form-btn">Records</a>
      
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

        <div class="container py-5">
          <input type="text" placeholder="User Name" name="username" required />
          <input type="text" placeholder="Email" name="email" autocomplete="off" required />
          <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
          <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required /><br>
          <button type="submit" class="btn btn-primary" name="submit">Register</button><br><br><br>
          </div>
      </form>

      <div class="contact100-more flex-col-c-m bg-dark" >

        
      </div>
    </div>
  </div>



  <div id="dropDownSelect1"></div>


</body>
</html>
