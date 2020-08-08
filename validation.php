<?php
session_start();

$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'user_login');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

$name = $_POST['name'];
$password = $_POST['password'];
$query = "SELECT * FROM `users` WHERE username='$name' and Password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){
		$_SESSION['username'] = $name;
		header('location:home.php');
//echo "Login Credentials verified";

}else{
		
		header('location:login.php');
}
?>