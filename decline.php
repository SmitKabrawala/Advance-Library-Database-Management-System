<?php
 error_reporting(0);
 $con= mysqli_connect("localhost","root",'',"LibraryDb") or die("Error: ". mysqli_error($con));


 $DocId=$_GET['DocId'];
 $LibId=$_GET['LibId'];
 $CopyId=$_GET['CopyId'];




 $query1 = "INSERT INTO copy
 (CopyId, DocId, LibId, CopyNo, Position)
 SELECT * FROM copyData WHERE CopyId='$CopyId' ";

 $query3=" INSERT INTO stores (DocId, LibId, CopyId)"
 . "VALUES ( '{$DocId}','{$LibId}','{$CopyId}' ) ";


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


 