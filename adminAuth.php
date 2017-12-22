 <?php
 // define variables and set to empty values
 $uname = $password = "";

 if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['uname']=='a' && $_POST['password']== 'a'){

 header('Location: adminHome.php');

 }
 else
 {echo "Incorrect Details";}

 ?>
