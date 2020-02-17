<!DOCTYPE html>
<html lang="en">
<head>
	<title> Eudoxus Home Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/home.css">
</head>

<body>
	<?php include 'header.php';?>

	<h1>Είσαι...</h1>

	<div class="column1">  <!-- student users -->
		<p id="student"><br>Φοιτητής</p>
		<img id="imgstudent" src="img/student.jpg" alt="a student">
		<a href="signup.php">Εγγραφή Χρήστη<br></a>
		<a href="profil.php">Επεξεργασία Προφίλ<br></a>
		<a href="choosebooks.php">Δήλωση Συγγραμμάτων<br></a>
	</div>

	<div class="column2">  <!-- university users -->
		<p id="university"><br>Γραμματεία</p>
		<img id="imguniversity" src="img/university.jpg" alt="a university classroom">
		<a href="signupuni.php">Εγγραφή Χρήστη<br></a>
		<a href="profiluni.php">Επεξεργασία Προφίλ<br></a>
		<a href="program.php">Ενημέρωση Προγράμματος σπουδών<br></a>
	</div>

	<div class="column3">  <!-- publisher users -->
		<p id="publisher"><br>Εκδότης</p>
		<img id="imgbook" src="img/book.jpg" alt="a book">
		<a href="signuppubl.php">Εγγραφή Χρήστη<br></a>
		<a href="profilpubl.php">Επεξεργασία Προφίλ<br></a>
		<a href="mybooks.php">Τα βιβλία μου<br></a>
	</div>


	<div class="column4">  <!-- bookstore users -->
		<p id="bookstore"><br>Βιβλιοπώλης</p>
		<img id="imgbookstore" src="img/bookstore.jpeg" alt="a bookcase full of books">
		<a href="signupbook.php">Εγγραφή Χρήστη<br></a>
		<a href="profilbook.php">Επεξεργασία Προφίλ<br></a>
	</div>

	<?php include 'footer.php';?>
</body>
