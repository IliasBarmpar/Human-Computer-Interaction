<!DOCTYPE html>
<html lang="en">
<head>
	<title> Eudoxus Home Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/signup.css">
</head>

<body>
	<?php include 'header.php';?>

	<ul class="breadcrumb"> <!--breadcurmbs-->
		<li><a href="index.php">Αρχική</a></li>
		<li>/ Αποτελέσματα Αναζήτησης</li>
	</ul>

	<?php
		$count = $_SESSION['count'];
		if($count == -1){
			echo "0 results.";
		}else{
			$j= 0;
			while($j <= $count) {
				$row = ($_SESSION['srcres'])[$j];
				echo "<br> Email: ". $row["Email"] . " . Name:" . $row["Name"];
				$j++;
			}
		}
	?>

	<?php include 'footer.php';?>
</body>
