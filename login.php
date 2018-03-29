<?php

session_start();

require 'database.php';

if(!empty($_POST['email']) && !empty($_POST['password'])){

	$records = $conn->prepare('SELECT id, email, password FROM userS WHERE email = :email');
	$records->bindParam(':email', $_POST['email']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$message = '';

	if(count($results) > 0 && password_verify($_POST['password'], $results['password'])){

		$_SESSION['user_id'] = $results['id'];
		header("Location: /");
	}else{
		$message = 'sorry, those credentials do not match';
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
		<input type="submit" value="submit">
	</form>

</body>
</html>