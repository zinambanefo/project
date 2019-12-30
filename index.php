<?php
include('login.php');
if(isset($_SESSION['login_user'])){
  header("location: homepage.php"); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FindAFeature - Homepage</title>
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <style>
    </style>
</head>
<body>
  <script src="index1.js"></script>
        <div class="bg"></div>
        <p>Here at FindAFeature, we are determined to listen to your movie loves and
            find you accurate reccomendations to save you time and get you watching
            more movies!
        </p>

        <form action="#" method="post">
                <div class="logincontainer">
                  <h1>Login</h1>
                  <hr>
              
                  <label><b>Username</b></label>
                  <input type="text" placeholder="Enter Username" name="username" required id="usernametext">
              
                  <label><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="password" required id="passwordtext">
                  <span><?php echo $error; ?></span>
                  <hr>
                  <button type="submit" class="loginbtn" id="loginbtn" name="loginbtn"><b>Login</b></button>
                  
                </div>
          </form>
          <div class="register">
                  <p>Don't have an account? <a href="register.php">Register</a>.</p>
          </div>
</body>
</html>