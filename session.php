<?php

$conn = mysqli_connect("localhost", "root", "", "FindAFeature");

session_start();

$user_check = $_SESSION['login_user'];

$query = "SELECT `FirstName` from users where username = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['FirstName'];
?>