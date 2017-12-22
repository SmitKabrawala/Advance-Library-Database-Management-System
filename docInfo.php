<?php

 $con= mysqli_connect("localhost","root",'',"LibraryDb") or die("Error: ". mysqli_error($con));


 $DocId=$_GET['docId'];
 $DocType=$_GET['docType'];

 if($DocType=='book')
 {
 header('location:bookInfo.php?docId='.$DocId);

 }

 elseif ($DocType=='journal') {

 header('location:journalInfo.php?docId='.$DocId);
 }

 else {

 header('location:proceedingInfo.php?docId='.$DocId);
 }

 ?>