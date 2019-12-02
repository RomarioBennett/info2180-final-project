<?php

$conn = mysqli_connect("localhost", "root", "");
session_start();

$user = $_SESSION['login_user'];

$query="SELECT email FROM User WHERE email= '$user_check'";
$ses_sql=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($ses_sql);
$login_session=$row['Email'];
?>