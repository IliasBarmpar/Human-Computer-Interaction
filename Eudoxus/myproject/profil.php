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
      <form class="form1" action="profil_change_action.php" method="post">
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
         <input type="text" placeholder="Αλλαγή  Ονόματος" name="name" maxlength="30" required>

         <h3><b>Επώνυμο</b></h3>
         <input type="text" placeholder="Αλλαγή  Επωνύμου" name="lastname" maxlength="30" required>

         <h3><b>Αριθμός Μητρώου</b></h3>
         <input type="number" placeholder="Αλλαγή  ΑΜ" name="ΑΜ" maxlength="30" required>

         <h3><b>Εκπαιδευτικό Ίδρυμα</b></h3>
         <select>
           <option value="-----">-------</option>
           <option value="ΑΛΕΞΑΝΔΡΕΙΟ ΤΕΙ ΘΕΣΣΑΛΟΝΙΚΗΣ">ΑΛΕΞΑΝΔΡΕΙΟ ΤΕΙ ΘΕΣΣΑΛΟΝΙΚΗΣ </option>
           <option value="ΑΝΩΤΑΤΗ ΕΚΚΛΗΣΙΑΣΤΙΚΗ ΑΚΑΔΗΜΙΑ ΑΘΗΝΑΣ ">ΑΝΩΤΑΤΗ ΕΚΚΛΗΣΙΑΣΤΙΚΗ ΑΚΑΔΗΜΙΑ ΑΘΗΝΑΣ </option>
           <option value="ΕΘΝΙΚΟ και ΚΑΠΟΔΙΣΤΡΙΑΚΟ ΠΑΝΕΠΙΣΤΗΜΙΟ ΑΘΗΝΩΝ ">ΕΘΝΙΚΟ και ΚΑΠΟΔΙΣΤΡΙΑΚΟ ΠΑΝΕΠΙΣΤΗΜΙΟ ΑΘΗΝΩΝ </option>
           <option value="ΠΑΝΤΕΙΟ ΠΑΝΕΠΙΣΤΗΜΙΟ ΚΟΙΝΩΝΙΚΩΝ και ΠΟΛΙΤΙΚΩΝ ΕΠΙΣΤΗΜΩΝ ">ΠΑΝΤΕΙΟ ΠΑΝΕΠΙΣΤΗΜΙΟ ΚΟΙΝΩΝΙΚΩΝ και ΠΟΛΙΤΙΚΩΝ ΕΠΙΣΤΗΜΩΝ </option>
           <option value="ΤΕΙ ΣΤΕΡΕΑΣ ΕΛΛΑΔΑΣ ">ΤΕΙ ΣΤΕΡΕΑΣ ΕΛΛΑΔΑΣ </option>
        <select>

          <h3><b>Τμήμα</b></h3>
          <input type="text" placeholder="Αλλαγή Τμήματος" name="tmima"  required>

          <h3><b>Μήνας και Έτος Εισαγωγής</b></h3>
          <input type="month" name="monthyear" max="2019-01" min="1999-12">

          <br>
           <a href="history.php"> Ιστορικό Δηλώσεων </a>
         <br>
         <br>
         <div class="button">
           <button type="cancel" class="cancelbtn">Άκυρο</button>
           <button type="submit" class="signupbtn">Αποθήκευση</button>
         </div>
       </div>
     </form>



    </div>

	<?php include 'footer.php';?>
</body>
