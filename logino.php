<!DOCTYPE html>
<html lang="en">
<head>
  <title>Suggestion Box</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

<!--===============================================================================================-->
</head>
<body>

    <div class="container-contact100">
        <div class="wrap-contact100">
            <form class="contact100-form validate-form" method="post" action="check.php" autocomplete="off">
                <h4>Admin login</h4>
        
                <div class="container-contact100-form-btn">
                    <a href="index.php" class="contact100-form-btn">Main</a>      
                </div>            
            
                <div class="container py-3"><br>
                    <label for="uname"></label>
                    <input type="text" placeholder="Enter Username" name="username" required><br>

                    <label for="psw"></label>
                    <input type="password" placeholder="Enter Password" name="password" required><br><br>

                    <button type="submit"  value="Login" class="btn btn-primary" name="submit">Login</button><br><br>
                    <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>
                <div>
                    <span class="psw">Forgot <a href="#">password?</a></span><br><br>
                </div>
            </form>        
      </div>
    </div>
</body>
</html>
