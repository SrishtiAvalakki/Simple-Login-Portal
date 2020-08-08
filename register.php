

<?php
session_start();
header('location:login.php');
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

//echo "Login Credentials verified";
echo "username already taken";

}else{
		$reg = "INSERT INTO `users`(`username`, `password`) VALUES ('$name','$password')";
		mysqli_query($connection,$reg);
		echo "registration successfull";//echo "Invalid Login Credentials";
}
?>