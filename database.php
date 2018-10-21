<?php
//database connection script using pdo
$server = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'anth';

	try {
		$conn = new PDO("mysql:host=$server;dbname=$db;", $username, $password);
	} catch (PDOException $e) {
		die("Connection failed" . $e->getMessage());
	}

?>