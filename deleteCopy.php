<?php

 $con=mysqli_connect("localhost", "root", '', "LibraryDb");


 $CopyId=$_GET['CopyId'];

 echo $CopyId;

 $query1="DELETE FROM copy WHERE CopyId='$CopyId'";

 $query2="DELETE FROM copyData WHERE CopyId='$CopyId'";

 $query3=" DELETE FROM stores WHERE CopyId='$CopyId' ";

 if( mysqli_query($con,$query3) && mysqli_query($con,$query1) && mysqli_query($con,$query2)){
 header('location:copies.php');

 }

 else{
 echo 'not deleted';}

 ?>