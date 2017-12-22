<?php
 $con= mysqli_connect("localhost","root",'',"LibraryDb") or die("Error: ". mysqli_error($con));
 session_start();
 $ReaderId=$_SESSION['readerId'];
 $CopyId=$_GET['CopyId'];
 $DocId = $_GET['DocId'];
 $LibId = $_GET['LibId'];
 $CopyNo = $_GET['CopyNo'];
 $Position=$_GET['Position'];
 $ResDateTime = date("Y/m/d H:i:s", strtotime("-1 day +18 hour") );
 $SetDateTime=date("Y/m/d H:i:s", strtotime("17:00:00") );
 $time= date("Y/m/d H:i:s", strtotime("-1 day +18 hour") );
 $query2=" SELECT COUNT(*) FROM borrows WHERE ReaderId='$ReaderId ' GROUP BY ReaderId ";

 $result2= mysqli_query($con, $query2);

 $row2 = mysqli_fetch_array($result2);

 $count2=$row2["COUNT(*)"];

 $query1=" SELECT COUNT(*) FROM reserves WHERE ReaderId='$ReaderId ' GROUP BY ReaderId ";

 $result1= mysqli_query($con, $query1);

 $row1 = mysqli_fetch_array($result1);
 $count1=$row1["COUNT(*)"];

 $count=$count1+$count2;

 echo $SetDateTime.'//////'.$ResDateTime;

 echo strtotime($SetDateTime).'/////'.strtotime($ResDateTime);

 /* if( $count<'10' && (strtotime($SetDateTime) > strtotime($ResDateTime) ) ){


 $query1 = "INSERT INTO reserves
 (ReaderId,CopyId, DocId, LibId, CopyNo,Position, ResDateTime)
 VALUES
 ( '{$ReaderId}', '{$CopyId}','{$DocId}','{$LibId}','{$CopyNo}','{$Position}', '{$ResDateTime}')";

 $query3="DELETE FROM stores WHERE CopyId='$CopyId' ";

 $query2="DELETE FROM copy
 WHERE CopyId='$CopyId' " ;

 if(mysqli_query($con, $query1) && mysqli_query($con, $query3) && mysqli_query($con, $query2) )
 {
 $m ="<span style='color:black;'>Reserved Successfully. Previous Reserved And Borrowed Books =</span>";
 header('location:readerHome.php?m='.$m.'& count='.$count );
 }
 else {
 echo 'error while inserting';}

 }
 else{

 $m ="<span style='color:black;'>Reservation UnSuccessfull. Reader Borrowed Books : '.$count' Time : '.$time</span>";
 //header('location:readerHome.php?m='.$m);
 }


 session_destroy();
 */
 ?>