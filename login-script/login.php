<?php

session_start();

require 'database.php';
if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
	}

if(!empty($_POST['email']) && !empty($_POST['password'])){

	$records = $conn->prepare('SELECT user_id, email, password FROM users WHERE email = :email');
	$records->bindParam(':email', $email);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	var_dump(count($results));

	$message = '';
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

	if((count($results) > 0) && password_verify($password, $hashed_password)){
			$_SESSION['user_id'] = $results['user_id'];
			header("Location: /index.php");
	}else{
		die("There was an error");
	}


}

	

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
	<div class="header">
		<a href="#">Your App name</a>
	</div>
	<h1>Login</h1>
	<span>or <a href="register.php">register here</a></span>	
	<?php if (!empty($message))
		echo '<br>'. $message; 
	?>

	<form action="login.php" method="POST">
		<input type="text" name="email" placeholder="Enter your email">
		<input type="password" name="password" placeholder="Enter your password">
		<input type="submit" value="submit" name="submit">
	</form>

</body>
</html>