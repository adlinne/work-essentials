<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect('localhost', 'root', '', 'work_essentials');
// Selecting Database
$db = mysqli_select_db($connection, "work_essentials");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection, "select a_username from admin where a_username='$user_check'");

$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['a_username'];

if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('Location: admin.php'); // Redirecting To Home Page
}
?>