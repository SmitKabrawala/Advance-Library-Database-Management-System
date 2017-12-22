<?php
 // define variables and set to empty values
 $uname = $password = "";

 if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['uname']=='e' && $_POST['password']== 'e'){

 header('Location: employeeHome.php');

 }
 else
 {echo "Incorrect Details";}

 ?>