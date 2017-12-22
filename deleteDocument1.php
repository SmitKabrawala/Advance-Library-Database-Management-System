<?php
 error_reporting(0);
 $con= mysqli_connect("localhost","root",'',"LibraryDb") or die("Error: ". mysqli_error($con));


 $docId = $_POST['docId'];




 $query = "SELECT * FROM document WHERE DocId='$docId'";
 $result = mysqli_query($con, $query);
 $num = mysqli_num_rows($result);

 if ($num= 0)
 {
 $m0 ="<span style='color:red;'>Document doesn't Exists</span>";
 //header('location:addReader.php?m0='.$m0);
 echo$m0;
 }
 else{
 $query1 = "DELETE FROM document WHERE DocId='$docId'";




 if(mysqli_query($con,$query1)){
 $m1 ="<span style='color:blue;'>Document deteled successfully</span>";
 //header('location:addReader.php?m1='.$m1);
 echo $m1;



 }
 else{
 echo "error while deleting the document".mysqli_error($con);
 }
 }


 ?>