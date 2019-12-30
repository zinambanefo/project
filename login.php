<?php
session_start();
$error = '';

if (isset($_POST['loginbtn'])){
    if(empty($_POST['username']) or empty($_POST['password'])){
        $error = 'Username or Password is invalid';
    }
    else{
        $username = $_POST['username'];
        $password = $_POST['password'];

        $conn = mysqli_connect("localhost", "root", "", "FindAFeature");
        $query = 'SELECT Username, Password from users where username=? AND password=?';
        
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->bind_result($username, $password);
        $stmt->store_result();

        if($stmt->fetch()){
            $_SESSION['login_user'] = $username;
            header("location: homepage.php");
        }

        else{
            $error = "Username or Password is invalid";
        }
        
        mysqli_close($conn);
    }
}
?>