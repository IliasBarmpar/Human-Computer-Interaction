<?php session_start();?>

<div class="topnav"> <!--the top navigation bar-->
	<a href="index.php">
	<img id="logo" src="img/eudoxus-logo.jpg" alt="eudoxus logo" ></a>
	<a href="annoucements.php">Ανακοινώσεις</a>
	<a href="information.php">Πληροφορίες</a>
	<a href="books.php">Συγγράμματα</a>
	<a href="about.php">Σχετικά</a>
	<a href="contact.php">Επικοινωνία</a>
	

	<div class="usericon">
		<?php
		if(isset($_SESSION['email'])){
			echo ''. $_SESSION['email'] . '
			<div>
					<a class="dropdown-user" data-toggle="dropdown"><img id="profil" src="img/profil.png" alt="profil icon" title="Είσοδος"></a>
			</div>
			';
			
		}else{
			echo ' '  . '<a href="login.php"><img id="profil" src="img/profil.png" alt="profil icon" title="Είσοδος"></a>';
		}
		?>
	</div>

	<div class="searchbar">     <!--search bar-->
		<form action="search_action.php" method="get" name="frmSearch">
			<input type="text" name="txtSearch" placeholder="Αναζήτηση..." size="10" >
			<input type="submit" value="Αναζήτηση">
		</form>
	</div>

</div>
