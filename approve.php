<?php
 error_reporting(0);
 $con= mysqli_connect("localhost","root",'',"LibraryDb") or die("Error: ". mysqli_error($con));


 $ReaderId=$_GET['ReaderId'];
 $CopyId=$_GET['CopyId'];
 $DocId = $_GET['DocId'];
 $LibId = $_GET['LibId'];
 $CopyNo = $_GET['CopyNo'];
 $Position = $_GET['Position'];
 $BorDateTime=$_GET['ResDateTime'];
 $RetDateTime="0000-00-00";
 $Fine=" ";



 $query1 = "INSERT INTO borrows
 (ReaderId, CopyId, DocId, LibId, CopyNo, Position, BorDateTime, RetDateTime, Fine)
 VALUES
 ( '{$ReaderId}','{$CopyId}', '{$DocId}','{$LibId}','{$CopyNo}','{$Position}','{$BorDateTime}','{$RetDateTime}','{$Fine}')";

 $query3="DELETE FROM stores WHERE CopyId='$CopyId' ";

 $query2="DELETE FROM reserves
 WHERE CopyId='$CopyId' " ;

 if(mysqli_query($con,$query1) && mysqli_query($con,$query2) && mysqli_query($con,$query3))
 {
 //$m1 ="<span style='color:blue;'>Reader details entered successfully</span>";
 header('location:reservedDocs.php');
 // echo $m1;



 }
 else{
 echo " error while inserting the records".mysqli_error($con);
 }



 ?>