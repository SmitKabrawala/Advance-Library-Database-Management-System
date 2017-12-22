<?php
 error_reporting(0);
 $con= mysqli_connect("localhost","root",'',"LibraryDb") or die("Error: ". mysqli_error($con));

 $CopyId=$_POST['copyId'];
 $DocId = $_POST['docId'];
 $LibId = $_POST['libId'];
 $CopyNo = $_POST['copyNo'];
 $Position = $_POST['position'];



 $query1 = "INSERT INTO copy
 (CopyId, DocId, LibId, CopyNo, Position)
 VALUES
 ( '{$CopyId}', '{$DocId}','{$LibId}','{$CopyNo}','{$Position}')";


 $query2 = "INSERT INTO copyData
 (CopyId, DocId, LibId, CopyNo, Position)
 VALUES
 ( '{$CopyId}', '{$DocId}','{$LibId}','{$CopyNo}','{$Position}')";


 $query3=" INSERT INTO stores (DocId, LibId, CopyId)"
 . "VALUES ('{$DocId}','{$LibId}','{$CopyId}')";

 if( mysqli_query($con,$query1) && mysqli_query($con,$query2) && mysqli_query($con,$query3) ){
 //$m1 ="<span style='color:blue;'>Reader details entered successfully</span>";
 header('location:copies.php');
 // echo $m1;



 }
 else{
 echo " error while inserting the records".mysqli_error($con);
 }



 ?>