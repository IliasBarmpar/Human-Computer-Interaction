<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Profil Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/profil.css">
  </head>

<body>
	<?php include 'header.php';?>

    <ul class="breadcrumb"> <!--breadcurmbs-->
     <li><a href="index.php">Αρχική</a></li>
     <li>/ Προφίλ</li>
    </ul>


    <div class="profil1">
      <form class="form1" action="action_page.php" method="post">
       <div class="form1">
         <h1>Επεξεργασία Προφίλ</h1>
         <hr>



         <h3><b>Email</b></h3>
         <input type="text" placeholder="Αλλαγή email" name="email" maxlength="30" required>

         <h3><b>Κωδικός</b></h3>
         <input type="password" placeholder="Αλλαγή Κωδικού" name="psw" maxlength="30" required>

         <h3><b>Επανάληψη Κωδικού</b></h3>
         <input type="password" placeholder="Επανάληψη Κωδικού" name="psw-repeat" maxlength="30" required>

         <h3><b>Όνομα</b></h3>
         <input type="text" placeholder="Αλλαγή Ονόματος" name="name" maxlength="30" required>

         <h3><b>Επώνυμο</b></h3>
         <input type="text" placeholder="Αλλαγή Επωνύμου" name="lastname" maxlength="30" required>

         <h3><b>Επωνυμία Καταστήματος</b></h3>
         <input type="text" placeholder="Αλλαγή Επωνυμίας Καταστήματος" name="shopname" maxlength="30" required>

         <h3><b>Διεύθυνση Καταστήματος</b></h3>
         <input type="text" placeholder="Αλλαγή Διεύθυνσης Καταστήματος" name="adress" maxlength="30" required>

         <h3><b></b>Ωράριο Καταστήματος</h3>
         <input type="text" placeholder="Αλλαγή Ωραρίου Καταστήματος" name="lastname" maxlength="30" required>





          <div class="button">
            <button type="cancel" class="cancelbtn">Άκυρο</button>
            <button type="submit" class="signupbtn">Αποθήκευση</button>
          </div>
        </div>
      </form>

    </div>




         <?php include 'footer.php';?>
 </body>
