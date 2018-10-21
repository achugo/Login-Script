<?php
	require 'database.php';
	
	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
	}
	$message = '';
	if(!empty($_POST['email']) && !empty($_POST['password'])){
		//enter new user to database
		$sql = "INSERT INTO users(password, email) VALUES (:password, :email)";
		$stmt = $conn->prepare($sql);

		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':password', $password);

		if ($stmt->execute()) {
			$message = 'Successfully created new user';
		} else {
			$message = 'Sorry, there must have been an issue creating your account';
		}

	}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
	<div class="header">
		<a href="#">Your App name</a>
	</div>

	<h1>Register</h1>
	<span>or <a href="login.php">login here</a></span>	

	<?php if (!empty($message))
		echo '<br>'. $message; 
	?>

	<form action="register.php" method="POST">
		<input type="text" name="email" placeholder="Enter your email">
		<input type="password" name="password" placeholder="Enter your password">
		<input type="password" name="password" placeholder="Confirm your password">
		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>