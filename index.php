<?php
session_start();




?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to your Web App</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
	<div class="header">
		<a href="#">First autodeploy</a>
	</div>

<?php if(isset($_SESSION['user_id'])): ?>

	<br/> Welcome, You are successfully logged in!

	<a href="logout.php">Logout?</a>

<?php else: ?> 

<h1> Please Login or Register</h1>
<a href="login.php">Login</a>or
<a href="register.php">Register</a>
<h1>For real i honestly have trust issues</h1>

<?php endif; ?>

</body>
</html>