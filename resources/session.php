<?php
include('config.php');
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Checking Connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Selecting Database
//$db = mysqli_select_db($connection, "auromisr_cr");

session_start();// Starting Session
// Storing Session
//$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
//$ses_sql=mysqli_query($connection,"select * from login where username='$user_check'");
//$row = mysqli_fetch_assoc($ses_sql);
//$login_session =$row['username'];

//$id = $row['id']; 


?>