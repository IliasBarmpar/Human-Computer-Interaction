<?php
	$nl = PHP_EOL;

	session_start();

	require_once 'mydatab.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if($conn->connect_error) die($conn->connect_error);

	//$txt = $_GET['txtSearch'];
	$txt = "a string";

	$query = "SELECT $txt FROM users";
	$result = $conn->query($query);
		
	print_r($result);
?>
