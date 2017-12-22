<?php
 // define variables and set to empty values
 $uname = $password = "";

 if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['uname']=='reader' && $_POST['password']== 'reader'){

 header('Location: readerHome.php');

 }
 else
 {echo "Incorrect Details";}

 ?>