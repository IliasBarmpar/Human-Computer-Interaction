<?php
	session_start();

	require_once 'mydatab.php';

	$conn = new mysqli($hn, $un, $pw, $db);
	if($conn->connect_error) die($conn->connect_error);

/*	
	if (!isset($_POST['email']) 
		|| !isset($_POST['name']) || !isset($_POST['lastname']) 
		|| !isset($_POST['psw']) || !isset($_POST['psw-repeat']) 
		|| !isset($_POST['radiosel'])) 
	{
		$_SESSION["register_error"] = "variable_unset";
		header("Location: signup.php");
	}
*/

	$email = $_POST['email'];
	$psw1  = $_POST['psw'];

	$query = "SELECT * FROM users WHERE email ='$email' AND password='$psw1'";
	$result = $conn->query($query);

	
	if($result->num_rows == 0){
//		$_SESSION["error"]="";
		header("Location: login.php");
	}else{
		$result->data_seek(0);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		$_SESSION['name']	= $row['Name'];
		$_SESSION['lastname']	= $row['Lastname'];
		$_SESSION['email']	= $row['Email'];
		$_SESSION['psw']	= $row['Password'];
		
		header("Location: index.php");
	}
?>
