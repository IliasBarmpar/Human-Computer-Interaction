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
	print_r($_SESSION['email']);
	$email = $_POST['email'];
	
	$query = "SELECT * FROM users WHERE email ='$email'";
	$result = $conn->query($query);

	$psw1 		= $_POST['psw'];
	$psw2 		= $_POST['psw-repeat'];
	$name 		= $_POST['name'];
	$lastname 	= $_POST['lastname'];
	$type 		= 'student';
//	$AM		=;
//	$tmima		=;
//	$monthyear	=;
/*	
	if($result->num_rows > 0){
            $_SESSION["register_error"]="email_exists";
            header("Location: signup.php");
	}
*/
/*
	if($psw1 != $psw2){
		$_SESSION["register_error"] = "confPass";
		header("Location: signup.php");
	}
*/
	$sql = "UPDATE users SET Email";
	"INSERT INTO users VALUES('$email','$psw1','$name','$lastname', '$type')";
	$conn->query($sql);	

	//header("Location: profil.php");
?>
