<?php
	session_start();

	require_once 'mydatab.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if($conn->connect_error) die($conn->connect_error);

	$txt = $_GET['txtSearch'];
	
	$query = "SELECT * FROM users WHERE Email = '$txt' OR Name = '$txt'";
	$result = $conn->query($query);

	$_SESSION['srcres'] = array();
	
	$i = 0;
	
	if ( $result->num_rows > 0 ) {
		$i = 0;
		while($row = $result->fetch_assoc()) {//fetch each row
			($_SESSION['srcres'])[$i] = $row;
			$i++;
		}
	}
	$_SESSION['count'] = $i - 1;

	header("Location: search.php");
?>
