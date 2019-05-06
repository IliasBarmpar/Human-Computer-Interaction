<!DOCTYPE html>
<html lang="en">
<head>
	<title>Log In</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/signup.css">
</head>

<body>
	<?php include 'header.php';?>

	<ul class="breadcrumb"> <!--breadcurmbs-->
		<li><a href="index.php">Αρχική</a></li>
		<li>/ Είσοδος</li>
	</ul>


	<form class="form1" action="login_action.php" method="post">
		<div class="form1">
			<h1>Είσοδος Χρήστη</h1>
			<hr>

			<h3><b>Email</b></h3>
			<input type="text" placeholder="Εισαγωγή email" name="email" maxlength="30" required>

			<h3><b>Κωδικός</b></h3>
			<input type="password" placeholder="Εισαγωγή Κωδικού" name="psw" maxlength="30" required>

			<div class="button">
				<button type="submit" class="loginbtn">Είσοδος</button>
			</div>

		</div>
	</form>

	<?php include 'footer.php';?>
</body>
