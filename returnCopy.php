<?php
 error_reporting(0);
 $con= mysqli_connect("localhost","root",'',"LibraryDb") or die("Error: ". mysqli_error($con));
 $BorNum=$_GET['BorNum'];
 $BorDateTime=$_GET['BorDateTime'];
 $CopyId=$_GET['CopyId'];
 $RetDateTime = date("Y/m/d H:i:s", strtotime("-1 day +18 hour") );

 $diff=strtotime($RetDateTime)-strtotime($BorDateTime);
 $datediff=round($diff / 86400);

 if($datediff > 20)
 {
 $fine= ($datediff-20)*0.30;

 $query0 = "UPDATE borrows
 SET Fine='$fine'
 WHERE CopyId='$CopyId' AND BorNum='$BorNum' ";

 $result0 = mysqli_query($con, $query0);

 }
 $query1 = "INSERT INTO copy
 (CopyId, DocId, LibId, CopyNo, Position)
 SELECT * FROM copyData WHERE copyId='$CopyId' ";

 $query3=" INSERT INTO stores (DocId, LibId, CopyId)
 SELECT DocId, LibId, CopyId FROM copyData WHERE copyId='$CopyId' ";
 $query2= " UPDATE borrows SET RetDateTime='$RetDateTime' WHERE CopyId='$CopyId' AND BorNum='$BorNum' ";
 if( mysqli_query($con,$query1) && mysqli_query($con,$query2) && mysqli_query($con,$query3) ){
 //$m1 ="<span style='color:blue;'>Reader details entered successfully</span>";
 header('location:borrowDocs.php');
 // echo $m1;

 }
 else{
 echo " error while inserting the records".mysqli_error($con);
 }
 ?>