<?php
session_start();

if(!isset($_SESSION['username'])){
	header('location:login.php');
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<a href="logout.php">logout</a>
		Welcome <?php echo $_SESSION['username'] ?>

</body>
</html>