<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Up</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/signup.css">
  </head>

<body>
	<?php include 'header.php';?>

	<?php session_start();?>

    <ul class="breadcrumb"> <!--breadcurmbs-->
     <li><a href="index.php">Αρχική</a></li>
     <li>/ Εγγραφή</li>
    </ul>

    <form class="form1" action="signup_action.php" method="post">
     <div class="form1">
       <h1>Εγγραφή Χρήστη για Φοιτητές</h1>
       <p>Συμπληρώστε την παρακάτω φόρμα για να δημιουργήσετε λογαριασμό.</p>
       <hr>

       <h3><b>Email</b></h3>
       <input type="text" placeholder="Εισαγωγή email" name="email" maxlength="30" required>

       <h3><b>Κωδικός</b></h3>
       <input type="password" placeholder="Εισαγωγή Κωδικού" name="psw" maxlength="30" required>

       <h3><b>Επανάληψη Κωδικού</b></h3>
       <input type="password" placeholder="Επανάληψη Κωδικού" name="psw-repeat" maxlength="30" required>

       <h3><b>Όνομα</b></h3>
       <input type="text" placeholder="Εισαγωγή Ονόματος" name="name" maxlength="30" required>

       <h3><b>Επώνυμο</b></h3>
       <input type="text" placeholder="Εισαγωγή Επωνύμου" name="lastname" maxlength="30" required>


       <h3><b>Αριθμός Μητρώου</b></h3>
       <input type="number" placeholder="Εισαγωγή ΑΜ" name="ΑΜ" maxlength="30" required>

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
        <input type="text" placeholder="Εισαγωγή Τμήματος" name="tmima"  required>

        <h3><b>Μήνας και Έτος Εισαγωγής</b></h3>
        <input type="month" name="monthyear"  max="2019-01" min="1999-12">



       <p>Δημιουργώντας λογαριασμό συμφωνείται στους <a href="#" >Όρους και τις Προϋποθέσεις</a>.</p>

       <div class="button">
         <button type="cancel" class="cancelbtn">Άκυρο</button>
         <button type="submit" class="signupbtn">Εγγραφή</button>
       </div>
     </div>
   </form>

	<?php include 'footer.php';?>
</body>
