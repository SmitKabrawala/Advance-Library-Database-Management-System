<?php
 error_reporting(0);
 $con= mysqli_connect("localhost","root",'',"LibraryDb") or die("Error: ". mysqli_error($con));


 $readerid = $_POST['readerid'];


 /* $readerid= filter_input(INPUT_POST, $readerid);
 $rname= filter_input(INPUT_POST, $rname);
 $address= filter_input(INPUT_POST, $address);
 $type= filter_input(INPUT_POST, $type);
 $phone= filter_input(INPUT_POST, $phone);*/

 $query = " DELETE FROM reader WHERE ReaderId='$readerid' ";


 if(mysqli_query($con, $query)){

 $m ="<span style='color:black;'>Reader deleted Succesfully</span>";
 header('location:adminHome.php?m='.$m);

 }

 ?>