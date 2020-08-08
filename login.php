<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
	  <div class="login-box">
		<div class="row">
			<div class="col-md-6 login-left">
				<h2>Login here!</h2>
				<form action="validation.php" method="post">
					<div class="form-group">
						<label>Username:</label>
						<input type="text" name="name" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password:</label>
						<input type="text" name="password" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
			<div class="col-md-6 register-right">
				<h2>Register here!</h2>
				<form action="register.php" method="post">
					<div class="form-group">
						<label>Username:</label>
						<input type="text" name="name" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password:</label>
						<input type="text" name="password" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-primary">Register Here</button>
				</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>